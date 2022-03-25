<?php

/**
 * This contains the tab set for encounter forms.
 *
 * @package   OpenEMR
 * @link      http://www.open-emr.org
 * @author    Rod Roark <rod@sunsetsystems.com>
 * @author    Brady Miller <brady.g.miller@gmail.com>
 * @copyright Copyright (c) 2017 Rod Roark <rod@sunsetsystems.com>
 * @copyright Copyright (c) 2018 Brady Miller <brady.g.miller@gmail.com>
 * @license   https://github.com/openemr/openemr/blob/master/LICENSE GNU General Public License 3
 */

require_once(dirname(__FILE__) . '/../../globals.php');
require_once("$srcdir/pid.inc");
require_once("$srcdir/encounter.inc");
require_once("$srcdir/forms.inc");

use OpenEMR\Tabs\TabsWrapper;
use OpenEMR\Core\Header;

if (isset($_GET["set_encounter"])) {
    // The billing page might also be setting a new pid.
    if (isset($_GET["set_pid"])) {
        $set_pid = $_GET["set_pid"];
    } elseif (isset($_GET["pid"])) {
        $set_pid = $_GET["pid"];
    } else {
        $set_pid = false;
    }

    if ($set_pid && $set_pid != $_SESSION["pid"]) {
        setpid($set_pid);
    }

    setencounter($_GET["set_encounter"]);
}

$tabset = new TabsWrapper('enctabs');
$tabset->declareInitialTab(
    xl('Summary'),
    "<iframe frameborder='0' class='w-100' style='height:94.5%' src='forms.php'>Oops</iframe>"
);
// We might have been invoked to load a particular encounter form.
// In that case it will be the second tab, and removable.
if (!empty($_GET['formname'])) {
    $url = $rootdir . "/patient_file/encounter/load_form.php?formname=" . attr_url($_GET['formname']);
    $tabset->declareInitialTab(
        $_GET['formdesc'],
        "<iframe name='enctabs-2' frameborder='0' class='w-100' style='height:94.5%' src='$url'>Oops</iframe>",
        true
    );
}

// This is for making the page title which will be picked up as the tab label.
$dateres = getEncounterDateByEncounter($encounter);
$encounter_date = date("Y-m-d", strtotime($dateres["date"]));
?>

<html>
<head>
<title><?php echo text(oeFormatShortDate($encounter_date)) . ' ' . xlt('Encounter'); ?></title>
    <?php Header::setupHeader(); ?>
<?php echo $tabset->genCss(); ?>
<?php echo $tabset->genJavaScript(); ?>
<script>

$(function () {
  // Initialize support for the tab set.
  twSetup('enctabs');
});

// This is called to refresh encounter display data after something has changed it.
// Currently only the encounter summary tab will be refreshed.
function refreshVisitDisplay() {
  for (var i = 0; i < window.frames.length; ++i) {
    if (window.frames[i].refreshVisitDisplay) {
      window.frames[i].refreshVisitDisplay();
    }
  }
}

// Called from the individual iframes when their forms want to close.
// The iframe window name is passed and identifies which tab it is.
// The "refresh" argument indicates if encounter data may have changed.
function closeTab(winname, refresh) {
  twCloseTab('enctabs', winname);
  if (refresh) {
    refreshVisitDisplay();
  }
}

</script>
</head>
<body class='m-0'>
<?php echo $tabset->genHtml(); ?>

<link rel="stylesheet" href="/public/assets/medical-note/css/style.css">
<link rel="stylesheet" href="/public/assets/medical-note/css/quill.snow.css">
<link rel="stylesheet" href="/public/assets/medical-note/css/font-awesome.min.css">
<div class='sticky-icon'>
  <div>
    <button class="btn btn-warning rounded-circle p-3" id="open_note">
      <img src="/public/assets/medical-note/images/note-icon3.png" alt="" style="width:50px; height:50px;" >
    </button>
  </div>
    

</div>

<div class="note_overlay" id="medical_note" style="overflow-y:scroll;">
    <div class="container" style="margin-top:20px;">
        <div id="history" style="display:none;">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <h2 class="mb-5">Medical Note History</h2>
                  
                        <div class="table-responsive" id="history_table">
                  
                          <table class="table custom-table">
                            <thead>
                              <tr>
                                <th scope="col">Patient Name</th>
                                <th scope="col">Posted By</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody id="history_body">
                              <tr>
                                <td>
                                  1392
                                </td>
                                <td>James Yates</td>
                                <td>
                                    <button class="btn"><i class="fa fa-edit" style="font-size: 20px;"></i></button>
                                    <button class="btn"><i class="fa fa-trash" style="font-size: 20px;"></i></button>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div id="history_loader" style="display: none;">
                            <div class="d-flex justify-content-center">
                                <div class="mb-5 mt-5">
                                    <img src="/public/assets/medical-note/images/loading.gif" alt="loading">
                                </div>
                            </div>

                        </div>
                  
                  
                    </div>
                </div>
            </div>
            <div class="sticky">
                <div class="control_button">
                    <div>
                        <button class="btn" title="New Note" id="new_note"><i class="fa fa-plus" style="font-size: 25px;"></i></button>
                    </div>

                    <div>
                        <button class="btn close_note" title="Close Note" ><i class="fa fa-close" style="font-size: 25px;"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div id="create_note" >
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="d-flex justify-content-between">
                            <div>
                               <h2 class="mb-5">New Medical Note</h2> 
                            </div>
                            <div>
                                <div class="spinner-border text-info" role="status" id="save_loading" style="display: none;">
                                </div>
                                <div class="alert alert-success" role="alert" style="display: none;" id="save_confirmed">
                                    <i class="fa fa-check mr-2" style="font-size: 15px;"></i>Saved
                                </div>
                            </div>
                        </div>
                        
                        <div id="editor">
                        </div>
                    </div>
                </div>
            </div>

            <div class="sticky">
                <div class="control_button">
                    <div>
                        <button class="btn" title="Save Note" id="save_note"><i class="fa fa-save" style="font-size: 25px;"></i></button>
                    </div>

                    <div>
                        <button class="btn load_history" title="History Note" id=""><i class="fa fa-history" style="font-size: 25px;"></i></button>  
                    </div>

                    <div>
                        <button class="btn close_note" title="Close Note" ><i class="fa fa-close" style="font-size: 25px;"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div id="edit_note" style="display:none;">
            <div class="card">
                <div class="card-body">
                    <div class="container" style="display: none;" id="edit-note-body">
                        <div class="d-flex justify-content-between">
                            <div>
                               <h2 class="mb-5" id="patient-name"></h2> 
                            </div>
                            <div>
                                <div class="spinner-border text-info" role="status" id="update_loading" style="display: none;">
                                </div>
                                <div class="alert alert-success" role="alert" style="display: none;" id="update_confirmed">
                                    <i class="fa fa-check mr-2" style="font-size: 15px;"></i>Updated
                                </div>
                            </div>
                        </div>
                        
                        <div id="edit-editor" patient_id="" note_id="">
                            
                        </div>
                    </div>
                    <div id="edit-loader">
                        <div class="d-flex justify-content-center">
                            <div class="mb-5 mt-5">
                                <img src="/public/assets/medical-note/images/loading.gif" alt="loading">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="sticky">
                <div class="control_button">
                    <div>
                        <button class="btn" title="Save Note" id="update_note"><i class="fa fa-upload" style="font-size: 25px;"></i></button>
                    </div>

                    <div>
                        <button class="btn load_history" title="History Note" ><i class="fa fa-history" style="font-size: 25px;"></i></button>  
                    </div>

                    <div>
                        <button class="btn close_note" title="Close Note" ><i class="fa fa-close" style="font-size: 25px;"></i></button>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
    
    <style>
        .sticky{
            position: fixed;
            top:5%;
            left: 93%;
        }
    </style>

    

</div>
<script src="/public/assets/medical-note/js/quill.js"></script>
<script src="/public/assets/medical-note/js/medical_note_module.js"></script>

</body>
</html>
