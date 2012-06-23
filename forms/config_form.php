<div class="field>
<label for="contribution_home_page">
<?php echo __('Make Contribution the Home Page?'); ?>
</label>

<?php
   echo __v()->formCheckBox(
        'contribution_home_page',
        true,
        array(
            'checked' => (boolean)get_option('contribution_home_page')
        )
    );
?>
</div>
