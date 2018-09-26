<?php defined('_JEXEC') or exit(); ?>

<div class="contactsPage">
    <div class="wrapContacts">
        <div class="container">
            <div class="h2">
                <?= JText::_('CONTACTS') ?>
            </div>
            <div class="wrapParts">
                <div class="rightPart">
                    <div class="h4">
                        <?= JText::_('CONTACT_US') ?>
                    </div>
                    <div class="text">
                        <?php
                        if( $this->lang == 'uk-UA' || !$this->params->get('contacts_page_description_ru','') )
                        {
                            echo $this->params->get('contacts_page_description_ua','');
                        }
                        else
                        {
                            echo $this->params->get('contacts_page_description_ru','');
                        }

                        ?>
                    </div>
                    <div class="contactMap">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <div class="textPart">
                            <?php echo $this->params->get('address',''); ?>
                        </div>
                    </div>
                    <div class="contactPhone">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                        <a href="tel:<?php echo $this->params->get('phone',''); ?>">
                            <div class="textPart">
                                <?php echo $this->params->get('phone',''); ?>
                            </div>
                        </a>
                    </div>
                    <div class="contactMail">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <a href="mailto:<?php echo $this->params->get('email',''); ?>">
                            <div class="textPart">
                                <?php echo $this->params->get('email',''); ?>
                            </div>
                        </a>
                    </div>
                    <div class="h4">
                        <?= JText::_('SOCIAL') ?>
                    </div>
                    <div class="wrapSocial">
                        <a href="http://<?php echo $this->params->get('facebook',''); ?>">
                            <i class="fa fa-facebook socialIcon lightBlueIconOnWhiteBgc" aria-hidden="true" target="_blank"></i>
                        </a>
                        <a href="http://<?php echo $this->params->get('instagram',''); ?>">
                            <i class="fa fa-instagram socialIcon lightBlueIconOnWhiteBgc" aria-hidden="true" target="_blank"></i>
                        </a>
                        <a href="http://<?php echo $this->params->get('youtube',''); ?>" target="_blank">
                            <i class="fa fa-youtube socialIcon lightBlueIconOnWhiteBgc" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="leftPart">
                    <div class="h4">
                        <?= JText::_('WRITE_US') ?>
                    </div>
                    <form class="writeUs">
                        <div class="wrapInputs">
                            <div class="wrapInput">
                                <input id="name" name="name" type="text" class="input" placeholder="<?= JText::_('YOUR_NAME')?>" required>
                            </div>
                            <div class="wrapInput">
                                <input id="email" name="email" type="text" class="input" placeholder="Email" required>
                            </div>
                            <div class="wrapInput">
                                <textarea id="message" name="message" class="input" placeholder="<?= JText::_('YOUR_MESSAGE')?>" required></textarea>
                            </div>
                        </div>
                        <div class="wrapBtn">
                            <button id="submit" class="btn" type="submit">
                                <?= JText::_('SEND')?>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="map" class="map"></div>
    </div>
</div>

<script>
    jQuery(document).ready(function() {

        jQuery("#submit").click(function() {

            var name = jQuery('#name').val();
            var email = jQuery('#email').val();
            var message = jQuery('#message').val();

            if (!name || !email || !validEmail(email) || !message) {
                alert('Пожалуйста, заполните поля формы корректно');
                return false;
            }

            jQuery.ajax({
                type: "POST",
                url: "<?php echo JURI::base(); ?>components/com_stadium/assets/ajax.php",
                data: "name="+name+"&email="+email+"&message="+message,
                success: function(result)
                {
                    jQuery('#name').val('');
                    jQuery('#email').val('');
                    jQuery('#message').val('');

                    alert(result);
                }
            });

            return false;
        });

        function validEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }
    })
</script>

