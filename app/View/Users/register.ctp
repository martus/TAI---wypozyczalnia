<h1>Rejestracja użytkownika</h1>
<?php
echo $this->Form->create('Register', array('url' => $this->here));
?>
<h2>Dane do logowania</h2>
<?php
echo $this->Form->input('e-mail');
echo $this->Form->input('password', array('label' => 'Hasło'));
echo $this->Form->input('password_repeat', array('label' => 'Powtórz hasło'));
?>
<h2>Dane użytkownika</h2>
<?php
echo $this->Form->input('name', array('label' => 'Imię'));
echo $this->Form->input('surname', array('label' => 'Nazwisko'));
echo $this->Form->input('street', array('label' => 'Adres (ulica nr domu/nr mieszkania)'));
echo $this->Form->input('city', array('label' => 'Miasto'));
echo $this->Form->input('post_code', array('label' => 'Kod pocztowy'));
echo $this->Form->input('country', array('label' => 'Państwo'));
?>
<h2>Zabezpieczenie rejestracji</h2>
<?php
echo $this->Form->input('security_code', array('label' => 'Proszę podać wynik równania: ' . $mathCaptcha));
?>
<br/>
<p>Sprawdź wszystkie dane. Jeśli są poprawne wciśnij przycisk poniżej aby się zarejestrować.</p>
<?php
echo $this->Form->end(array('name' => 'Zarejestruj', 'class' => 'input_btn'));
?>