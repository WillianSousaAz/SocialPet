<p>Nome Completo</p>
<input type="text" placeholder="Ex: João Victor" minlength="7" name="nome" required>
<p>Data de Nascimento</p>
<input type="date" class="data" name="nascimento" id="nascimento" pattern="[0-9]+$" required>
<p>Celular</p>
<input type="text" placeholder="Ex: (xx) xxxxx-xxxx" minlength="11" name="celular" maxlength="11" pattern="[0-9]+$" required>
<p>CPF</p>
<input type="text" placeholder="Ex: xxx.xxx.xxx-xx" id="cpf" maxlength="11" minlength="11" name="cpf" onblur="return verificarCPF(this.value)" pattern="[0-9]+$" required>