<?php /* Smarty version 2.6.31, created on 2022-03-08 12:14:34
         compiled from /home/soluyggw/public_html/interface/forms/ros/templates/ros/general_new.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'xl', '/home/soluyggw/public_html/interface/forms/ros/templates/ros/general_new.html', 13, false),array('function', 'headerTemplate', '/home/soluyggw/public_html/interface/forms/ros/templates/ros/general_new.html', 15, false),array('function', 'xlt', '/home/soluyggw/public_html/interface/forms/ros/templates/ros/general_new.html', 31, false),array('function', 'html_radios', '/home/soluyggw/public_html/interface/forms/ros/templates/ros/general_new.html', 39, false),array('modifier', 'text', '/home/soluyggw/public_html/interface/forms/ros/templates/ros/general_new.html', 13, false),array('modifier', 'attr', '/home/soluyggw/public_html/interface/forms/ros/templates/ros/general_new.html', 33, false),)), $this); ?>
<html>
<head>

<title><?php echo smarty_function_xl(array('t' => ((is_array($_tmp='Review Of Systems')) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp))), $this);?>
</title>

<?php echo smarty_function_headerTemplate(array(), $this);?>

<?php echo '
 <style>
    label {
        padding: 0px 5px !Important;
    }
    input[type=checkbox], input[type=radio] {
        margin: 4px;
    }
</style>
'; ?>

</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h2><?php echo smarty_function_xlt(array('t' => 'Review Of Systems'), $this);?>
</h2>
                <form name="ros" class="form-horizontal" method="post" action="<?php echo $this->_tpl_vars['FORM_ACTION']; ?>
/interface/forms/ros/save.php" onsubmit="return top.restoreSession()">
                    <input type="hidden" name="csrf_token_form" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['CSRF_TOKEN_FORM'])) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
" />
                    <fieldset>
                        <legend><?php echo smarty_function_xlt(array('t' => 'Constitutional'), $this);?>
</legend>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="weight_change" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Weight Change'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'weight_change','id' => 'weight_change','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_weight_change(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="anorexia" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Anorexia'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'anorexia','id' => 'anorexia','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_anorexia(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="night_sweats" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Night Sweats'), $this);?>
</label>
                                <?php echo smarty_function_html_radios(array('name' => 'night_sweats','id' => 'night_sweats','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_night_sweats(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="heat_or_cold" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Heat or Cold'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'heat_or_cold','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_heat_or_cold(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="weakness" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Weakness'), $this);?>
</label>
                                <?php echo smarty_function_html_radios(array('name' => 'weakness','id' => 'weakness','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_weakness(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="fever" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Fever'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'fever','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_fever(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="insomnia" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Insomnia'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'insomnia','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_insomnia(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="intolerance" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Intolerance'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'intolerance','id' => 'intolerance','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_intolerance(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="fatigue" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Fatigue'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'fatigue','id' => 'fatigue','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_fatigue(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="weight_change" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Chills'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'chills','id' => 'chills','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_chills(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="irritability" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Irritability'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'irritability','id' => 'irritability','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_irritability(),'separator' => ""), $this);?>

                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend><?php echo smarty_function_xlt(array('t' => 'Eyes'), $this);?>
</legend>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="change_in_vision" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Change in Vision'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'change_in_vision','id' => 'change_in_vision','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_weight_change(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="irritation" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Irritation'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'irritation','id' => 'irritation','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_irritation(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="double_vision" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Double Vision'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'double_vision','id' => 'double_vision','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_double_vision(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="glaucoma_history" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Family History of Glaucoma'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'glaucoma_history','id' => 'glaucoma_history','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_glaucoma_history(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="redness" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Redness'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'redness','id' => 'redness','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_redness(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="blind_spots" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Blind Spots'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'blind_spots','id' => 'blind_spots','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_blind_spots(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="eye_pain" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Eye Pain'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'eye_pain','id' => 'eye_pain','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_eye_pain(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="excessive_tearing" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Excessive Tearing'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'excessive_tearing','id' => 'excessive_tearing','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_excessive_tearing(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="photophobia" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Photophobia'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'photophobia','id' => 'photophobia','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_photophobia(),'separator' => ""), $this);?>

                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend><?php echo smarty_function_xlt(array('t' => 'Ears'), $this);?>
, <?php echo smarty_function_xlt(array('t' => 'Nose'), $this);?>
, <?php echo smarty_function_xlt(array('t' => 'Mouth'), $this);?>
, <?php echo smarty_function_xlt(array('t' => 'Throat'), $this);?>
</legend>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="hearing_loss" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Hearing Loss'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'hearing_loss','id' => 'hearing_loss','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_hearing_loss(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="vertigo" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Vertigo'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'vertigo','id' => 'vertigo','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_vertigo(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="sore_throat" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Sore Throat'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'sore_throat','id' => 'sore_throat','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_sore_throat(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="nosebleed" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Nosebleed'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'nosebleed','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_nosebleed(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="discharge" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Discharge'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'discharge','id' => 'discharge','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_discharge(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="tinnitus" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Tinnitus'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'tinnitus','id' => 'tinnitus','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_tinnitus(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="sinus_problems" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Sinus Problems'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'sinus_problems','id' => 'sinus_problems','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_sinus_problems(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="snoring" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Snoring'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'snoring','id' => 'snoring','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_snoring(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="pain" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Pain'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'pain','id' => 'pain','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_pain(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="frequent_colds" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Frequent Colds'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'frequent_colds','id' => 'frequent_colds','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_frequent_colds(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="post_nasal_drip" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Post Nasal Drip'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'post_nasal_drip','id' => 'post_nasal_drip','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_post_nasal_drip(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="apnea" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Apnea'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'apnea','id' => 'apnea','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_apnea(),'separator' => ""), $this);?>

                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend><?php echo smarty_function_xlt(array('t' => 'Breast'), $this);?>
</legend>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="breast_mass" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Breast Mass'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'breast_mass','id' => 'breast_mass','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_breast_mass(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="abnormal_mammogram" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Abnormal Mammogram'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'abnormal_mammogram','id' => 'abnormal_mammogram','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_abnormal_mammogram(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="breast_discharge" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Discharge'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'breast_discharge','id' => 'breast_discharge','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_breast_discharge(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="biopsy" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Biopsy'), $this);?>
</label>
                                <?php echo smarty_function_html_radios(array('name' => 'biopsy','id' => 'biopsy','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_biopsy(),'separator' => ""), $this);?>

                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend><?php echo smarty_function_xlt(array('t' => 'Respiratory'), $this);?>
</legend>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="cough" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Cough'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'cough','id' => 'cough','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_cough(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="wheezing" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Wheezing'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'wheezing','id' => 'wheezing','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_wheezing(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="copd" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'COPD'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'copd','id' => 'copd','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_copd(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="sputum" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Sputum'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'sputum','id' => 'sputum','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_sputum(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="hemoptsyis" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Hemoptysis'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'hemoptsyis','id' => 'hemoptsyis','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_hemoptsyis(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="shortness_of_breath" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Shortness of Breath'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'shortness_of_breath','id' => 'shortness_of_breath','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_shortness_of_breath(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="asthma" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Asthma'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'asthma','id' => 'asthma','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_asthma(),'separator' => ""), $this);?>

                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend><?php echo smarty_function_xlt(array('t' => 'Cardiovascular'), $this);?>
</legend>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="chest_pain" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Chest Pain'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'chest_pain','id' => 'chest_pain','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_chest_pain(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="pnd" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'PND'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'pnd','id' => 'pnd','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_pnd(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="peripheal" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Peripheral'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'peripheal','id' => 'peripheal','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_peripheal(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="history_murmur" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'History of Heart Murmur'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'history_murmur','id' => 'history_murmur','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_history_murmur(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="palpitation" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Palpitation'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'palpitation','id' => 'palpitation','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_palpitation(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="doe" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'DOE'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'doe','id' => 'doe','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_doe(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="edema" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Edema'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'edema','id' => 'edema','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_edema(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="arrythmia" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Arrythmia'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'arrythmia','id' => 'arrythmia','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_arrythmia(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="syncope" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Syncope'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'syncope','id' => 'syncope','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_syncope(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="orthopnea" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Orthopnea'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'orthopnea','id' => 'orthopnea','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_orthopnea(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="legpain_cramping" class="col-form-label"><?php echo smarty_function_xlt(array('t' => "Leg Pain/Cramping"), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'legpain_cramping','id' => 'legpain_cramping','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_legpain_cramping(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="heart_problem" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Heart Problem'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'heart_problem','id' => 'heart_problem','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_heart_problem(),'separator' => ""), $this);?>

                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend><?php echo smarty_function_xlt(array('t' => 'Gastrointestinal'), $this);?>
</legend>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="dysphagia" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Dysphagia'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'dysphagia','id' => 'dysphagia','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_dysphagia(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="belching" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Belching'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'belching','id' => 'belching','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_belching(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="vomiting" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Vomiting'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'vomiting','id' => 'vomiting','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_vomiting(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="food_intolerance" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Food Intolerance'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'food_intolerance','id' => 'food_intolerance','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_food_intolerance(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="hematochezia" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Hematochezia'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'hematochezia','id' => 'hematochezia','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_hematochezia(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="constipation" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Constipation'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'constipation','id' => 'constipation','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_constipation(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="heartburn" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Heartburn'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'heartburn','id' => 'heartburn','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_heartburn(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="flatulence" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Flatulence'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'flatulence','id' => 'flatulence','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_flatulence(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="hematemesis" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Hematemesis'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'hematemesis','id' => 'hematemesis','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_hematemesis(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="name="hepatitis" " class="col-form-label"><?php echo smarty_function_xlt(array('t' => "H/O Hepatitis"), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'hepatitis','id' => 'hepatitis','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_hepatitis(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="name="changed_bowel" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Changed Bowel'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'changed_bowel','id' => 'changed_bowel','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_changed_bowel(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="bloating" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Bloating'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'bloating','id' => 'bloating','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_bloating(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="nausea" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Nausea'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'nausea','id' => 'nausea','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_nausea(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="gastro_pain" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Pain'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'gastro_pain','id' => 'gastro_pain','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_gastro_pain(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="jaundice" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Jaundice'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'jaundice','id' => 'jaundice','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_jaundice(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="diarrhea" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Diarrhea'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'diarrhea','id' => 'diarrhea','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_diarrhea(),'separator' => ""), $this);?>

                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend><?php echo smarty_function_xlt(array('t' => 'Genitourinary'), $this);?>
 <?php echo smarty_function_xlt(array('t' => 'General'), $this);?>
</legend>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="polyuria" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Polyuria'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'polyuria','id' => 'polyuria','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_polyuria(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="hematuria" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Hematuria'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'hematuria','id' => 'hematuria','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_hematuria(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="incontinence" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Incontinence'), $this);?>
::</label>
                                <?php echo smarty_function_html_radios(array('name' => 'incontinence','id' => 'incontinence','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_incontinence(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="polydypsia" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Polydypsia'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'polydypsia','id' => 'polydypsia','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_polydypsia(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="frequency" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Frequency'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'frequency','id' => 'frequency','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_frequency(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="renal_stones" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Renal Stones'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'renal_stones','id' => 'renal_stones','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_renal_stones(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="dysuria" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Dysuria'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'dysuria','id' => 'dysuria','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_dysuria(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="urgency" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Urgency'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'urgency','id' => 'urgency','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_urgency(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="utis" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'UTIs'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'utis','id' => 'utis','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_utis(),'separator' => ""), $this);?>

                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend><?php echo smarty_function_xlt(array('t' => 'Genitourinary'), $this);?>
 <?php echo smarty_function_xlt(array('t' => 'Male'), $this);?>
</legend>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="hesitancy" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Hesitancy'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'hesitancy','id' => 'hesitancy','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_hesitancy(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="nocturia" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Nocturia'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'nocturia','id' => 'nocturia','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_nocturia(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="dribbling" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Dribbling'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'dribbling','id' => 'dribbling','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_dribbling(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="erections" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Erections'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'erections','id' => 'erections','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_erections(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="stream" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Stream'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'stream','id' => 'stream','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_stream(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="ejaculations" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Ejaculations'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'ejaculations','id' => 'ejaculations','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_ejaculations(),'separator' => ""), $this);?>

                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend><?php echo smarty_function_xlt(array('t' => 'Genitourinary'), $this);?>
 <?php echo smarty_function_xlt(array('t' => 'Female'), $this);?>
</legend>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="g" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Female G'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'g','id' => 'g','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_g(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="lc" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Female LC'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'lc','id' => 'lc','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_lc(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="lmp" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'LMP'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'lmp','id' => 'lmp','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_lmp(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="f_symptoms" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Symptoms'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'f_symptoms','id' => 'f_symptoms','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_f_symptoms(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="p" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Female P'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'p','id' => 'p','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_p(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="mearche" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Menarche'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'mearche','id' => 'mearche','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_mearche(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="f_frequency" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Frequency'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'f_frequency','id' => 'f_frequency','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_f_frequency(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="abnormal_hair_growth" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Abnormal Hair Growth'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'abnormal_hair_growth','id' => 'abnormal_hair_growth','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_abnormal_hair_growth(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="ap" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Female AP'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'ap','id' => 'ap','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_ap(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="menopause" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Menopause'), $this);?>
</label>
                                <?php echo smarty_function_html_radios(array('name' => 'menopause','id' => 'menopause','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_menopause(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="f_flow" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Flow'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'f_flow','id' => 'f_flow','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_f_flow(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="f_hirsutism" class="col-form-label"><?php echo smarty_function_xlt(array('t' => "F/H Female Hirsutism/Striae"), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'f_hirsutism','id' => 'f_hirsutism','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_f_hirsutism(),'separator' => ""), $this);?>

                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend><?php echo smarty_function_xlt(array('t' => 'Musculoskeletal'), $this);?>
</legend>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="joint_pain" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Chronic Joint Pain'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'joint_pain','id' => 'joint_pain','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_joint_pain(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="m_warm" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Warm'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'm_warm','id' => 'm_warm','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_m_warm(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="m_aches" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Aches'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'm_aches','id' => 'm_aches','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_m_aches(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="swelling" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Swelling'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'swelling','id' => 'swelling','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_swelling(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="m_stiffness" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Stiffness'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'm_stiffness','id' => 'm_stiffness','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_m_stiffness(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="fms" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'FMS'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'fms','id' => 'fms','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_fms(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="m_redness" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Redness'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'm_redness','id' => 'm_redness','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_m_redness(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="muscle" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Muscle'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'muscle','id' => 'muscle','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_muscle(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="arthritis" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Arthritis'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'arthritis','id' => 'arthritis','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_arthritis(),'separator' => ""), $this);?>

                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend><?php echo smarty_function_xlt(array('t' => 'Neurologic'), $this);?>
</legend>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="loc" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'LOC'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'loc','id' => 'loc','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_loc(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="tia" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'TIA'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'tia','id' => 'tia','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_tia(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="paralysis" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Paralysis'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'paralysis','id' => 'paralysis','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_paralysis(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="dementia" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Dementia'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'dementia','id' => 'dementia','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_dementia(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="seizures" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Seizures'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'seizures','id' => 'seizures','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_seizures(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="n_numbness" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Numbness'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'n_numbness','id' => 'n_numbness','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_n_numbness(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="intellectual_decline" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Intellectual Decline'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'intellectual_decline','id' => 'intellectual_decline','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_intellectual_decline(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="n_headache" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Headache'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'n_headache','id' => 'n_headache','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_n_headache(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="stroke" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Stroke'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'stroke','id' => 'stroke','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_stroke(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="n_weakness" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Weakness'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'n_weakness','id' => 'n_weakness','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_n_weakness(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="memory_problems" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Memory Problems'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'memory_problems','id' => 'memory_problems','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_memory_problems(),'separator' => ""), $this);?>

                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend><?php echo smarty_function_xlt(array('t' => 'Skin'), $this);?>
</legend>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="s_cancer" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Cancer'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 's_cancer','id' => 's_cancer','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_s_cancer(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="s_other" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Other'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 's_other','id' => 's_other','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_s_other(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="psoriasis" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Psoriasis'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'psoriasis','id' => 'psoriasis','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_psoriasis(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="s_disease" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Disease'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 's_disease','id' => 's_disease','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_s_disease(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="s_acne" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Acne'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 's_acne','id' => 's_acne','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_s_acne(),'separator' => ""), $this);?>

                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend><?php echo smarty_function_xlt(array('t' => 'Psychiatric'), $this);?>
</legend>
                                                <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="p_diagnosis" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Psychiatric Diagnosis'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'p_diagnosis','id' => 'p_diagnosis','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_p_diagnosis(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="anxiety" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Anxiety'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'anxiety','id' => 'anxiety','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_anxiety(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="p_medication" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Psychiatric Medication'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'p_medication','id' => 'p_medication','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_p_medication(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="social_difficulties" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Social Difficulties'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'social_difficulties','id' => 'social_difficulties','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_social_difficulties(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="depression" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Depression'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'depression','id' => 'depression','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_depression(),'separator' => ""), $this);?>

                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend><?php echo smarty_function_xlt(array('t' => 'Endocrine'), $this);?>
</legend>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="thyroid_problems" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Thyroid Problems'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'thyroid_problems','id' => 'thyroid_problems','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_thyroid_problems(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="diabetes" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Diabetes'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'diabetes','id' => 'diabetes','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_diabetes(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="abnormal_blood" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Abnormal Blood Test'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'abnormal_blood','id' => 'abnormal_blood','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_abnormal_blood(),'separator' => ""), $this);?>

                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend><?php echo smarty_function_xlt(array('t' => 'Hematologic'), $this);?>
/<?php echo smarty_function_xlt(array('t' => 'Allergic'), $this);?>
/<?php echo smarty_function_xlt(array('t' => 'Immunologic'), $this);?>
</legend>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="anemia" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Anemia'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'anemia','id' => 'anemia','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_anemia(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="allergies" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Allergies'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'allergies','id' => 'allergies','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_allergies(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="hai_status" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'HAI Status'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'hai_status','id' => 'hai_status','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_hai_status(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="fh_blood_problems" class="col-form-label"><?php echo smarty_function_xlt(array('t' => "F/H Blood Problems"), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'fh_blood_problems','id' => 'fh_blood_problems','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_fh_blood_problems(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="frequent_illness" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Frequent Illness'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'frequent_illness','id' => 'frequent_illness','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_frequent_illness(),'separator' => ""), $this);?>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                                <label for="bleeding_problems" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Bleeding Problems'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'bleeding_problems','id' => 'bleeding_problems','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_bleeding_problems(),'separator' => ""), $this);?>

                            </div>
                            <div class="form-group mt-3">
                                <label for="hiv" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'HIV'), $this);?>
:</label>
                                <?php echo smarty_function_html_radios(array('name' => 'hiv','id' => 'hiv','options' => $this->_tpl_vars['form']->get_options(),'selected' => $this->_tpl_vars['form']->get_hiv(),'separator' => ""), $this);?>

                            </div>
                        </div>

                    </fieldset>
                    <div class="form-group mt-3">
                        <div class="col-sm-12 position-override">
                            <div class="btn-group" role="group">
                                <button type="submit" class="btn btn-primary btn-save" onclick="top.restoreSession();" name="Submit"><?php echo smarty_function_xlt(array('t' => 'Save'), $this);?>
</button>
                                <button type="button" class="btn btn-secondary btn-cancel" onclick="top.restoreSession(); location.href='<?php echo $this->_tpl_vars['DONT_SAVE_LINK']; ?>
';"><?php echo smarty_function_xlt(array('t' => 'Cancel'), $this);?>
</button>
                            </div>
                            <input type="hidden" name="id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['form']->get_id())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
" />
                            <input type="hidden" name="pid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['form']->get_pid())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
" />
                            <input type="hidden" name="process" value="true" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>