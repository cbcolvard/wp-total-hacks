<div id="dashboard" class="tab">
<h3><?php _e('Other', 'wpbiz'); ?></h3>

<div class="block">
    <h4><img src="<?php echo $this->get_plugin_url(); ?>/img/check.png" height="24" width="24" /><?php _e('Deactive Dashboard Widgets', 'wpbiz'); ?></h4>
    <div class="block_content">
        <p><?php _e('Click on the check box that you want to delete.', 'wpbiz'); ?></p>
        <ul>
            <?php foreach ($this->widgets as $wgt => $pos): ?>
            <li>
<?php if (get_option('wfb_widget') && is_array(get_option('wfb_widget')) && in_array($wgt, get_option('wfb_widget'))): ?>
                <input id="wfb_widget_<?php echo $wgt; ?>" type="checkbox" name="wfb_widget[]" value="<?php echo $wgt; ?>" checked="checked" />
<?php else: ?>
                <input id="wfb_widget_<?php echo $wgt; ?>" type="checkbox" name="wfb_widget[]" value="<?php echo $wgt; ?>" />
<?php endif; ?>
                <label for="wfb_widget_<?php echo $wgt; ?>"><?php _e($pos['title']); ?></label>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<div class="block">
    <h4><img src="<?php echo $this->get_plugin_url(); ?>/img/check.png" height="24" width="24" /><?php _e('Add role "Webmaster"', 'wpbiz'); ?></h4>
    <div class="block_content">
        <p>"Webmaster" is role able to "Editor" + "edit_theme_options".</p>
        <?php $this->sel('wfb_webmaster'); ?>
    </div>
</div>

<div class="block">
    <h4><img src="<?php echo $this->get_plugin_url(); ?>/img/check.png" height="24" width="24" /><?php _e('Change the default eamil address', 'wpbiz'); ?></h4>
    <div class="block_content">
        <p><?php _e('Change the default eamil address and sender name.', 'wpbiz'); ?></p>
        <dl>
            <dt><?php _e('Name'); ?></dt>
            <dd><input class="text" type="text" name="wfb_sendername" value="<?php $this->op('wfb_sendername')?>" /></dd>
            <dt><?php _e('Email'); ?></dt>
            <dd><input class="text" type="text" name="wfb_emailaddress" value="<?php $this->op('wfb_emailaddress')?>" /></dd>
        </dl>
    </div>
</div>

<div class="block">
    <h4><img src="<?php echo $this->get_plugin_url(); ?>/img/check.png" height="24" width="24" /><?php _e('Delete default contact methods', 'wpbiz'); ?></h4>
    <div class="block_content">
        <p><?php _e('Delete default contact methods from user profile.', 'wpbiz'); ?></p>
        <ul>
            <?php foreach ($this->contact_methods as $c => $n): ?>
            <li>
<?php if (get_option('wfb_contact_methods') && is_array(get_option('wfb_contact_methods')) && in_array($c, get_option('wfb_contact_methods'))): ?>
                <input id="wfb_contact_methods_<?php echo $c; ?>" type="checkbox" name="wfb_contact_methods[]" value="<?php echo $c; ?>" checked="checked" />
<?php else: ?>
                <input id="wfb_contact_methods_<?php echo $c; ?>" type="checkbox" name="wfb_contact_methods[]" value="<?php echo $c; ?>" />
<?php endif; ?>
                <label for="wfb_contact_methods_<?php echo $c; ?>"><?php _e($n); ?></label>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

</div><!--end .tab-->


