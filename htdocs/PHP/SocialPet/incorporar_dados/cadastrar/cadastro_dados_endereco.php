<p>CEP</p>
<input type="text" placeholder="Ex: xxxxxxxx" pattern="[0-9]+$" name="cep" id="cep" maxlength="8" minlength="8" onblur="return pesquisarcep()" required >
<p>Rua</p>
<input type="text" id="rua" name="rua" placeholder="Campo automático" required readonly>
<p>Bairro</p>
<input type="text" id="bairro" placeholder="Campo automático" name="bairro" minlength="3" required readonly>
<div class="caixa-dupla">
    <div class="cidade">
        <p>Cidade</p>
        <input type="text" id="cidade" name="cidade" placeholder="Campo automático" required readonly>
    </div>
    <div class="estado" required>
        <p>Estado</p>
        <input type="text" id="estado" name="estado" placeholder="Campo automático" class="estado" required readonly>
    </div>
</div>
<p>Numero da Residencia</p>
<input type="text" name="numeroResidencia" placeholder="Numero da Residencia" required>
<p>Complemento</p>
<input type="text" placeholder="Ex: Predio 3, Quarto 11" name="complemento">