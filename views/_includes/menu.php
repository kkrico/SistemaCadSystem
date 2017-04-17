<?php if ( ! defined('ABSPATH')) exit; ?>

<?php if ( $this->login_required && ! $this->logged_in ) return; ?>

<nav class="menu clearfix">
    <ul>
        <li>
            <a href="<?php echo HOME_URI;?>">Home</a>
        </li>
    </ul>
</nav>