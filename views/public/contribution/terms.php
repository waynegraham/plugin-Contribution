<?php
    $head = array('title' => 'Contribution Terms of Service',
              'bodyclass' => 'contribution');
    head($head);

    echo get_option('contribution_consent_text');

    foot();
