<?php ?>
<h2>Login</h2>
<?php
	echo $this->Session->flash('auth');
    echo $this->Form->create('User', array('action' => 'login'));
    echo $this->Form->input('e-mail');
    echo $this->Form->input('password');
    echo $this->Form->end('Login');
?>