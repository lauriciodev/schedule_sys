<header>
    <h2 class="text-center text-white"><?= $_title ?></h2>

</header>

<div class="container-lg border border-light bg-dark p-1">

    <form action="<?=  PAGE_POST ?>" method="POST" novalidate>
             <input type="hidden" name="ctt_id" value="<?= $ctt_id ?>" /> 
        <div class="d-flex p-2 text-white gap-2 w-100 align-itens-center justify-content-center">

            <div class="form-group w-100">
                <label for="nome">Nome</label>
                <input type="text" id="Nome" class="form-control" value="<?= @$r['ctt_name']?>" name="_name" placeholder="Jhon Doe">
            </div>

            <div class="form-group w-100">
                <label for="email">Email</label>
                <input class="form-control" type="text" value="<?= @$r['ctt_email']?>" name="_email" placeholder="exemplo@gmail.com">
            </div>

        </div>

        <div class="d-flex p-2 text-white gap-2 w-100 align-itens-center justify-content-center">

            <div class="form-group w-100">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" value="<?= @$r['ctt_adress']?>" id="endereco" name="_adress" placeholder="Av. sn centro nº 00">
            </div>

            <div class="form-group w-100">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" value="<?= @$r['ctt_contact']?>" name="_contact" placeholder="(00) 00000-0000">
            </div>

        </div>

        <div class="d-flex p-2 text-white gap-2 w-100 align-itens-center justify-content-center">

            <div class="form-group w-100">
                <label for="sexo">Sexo</label>
                <select name="_sex" class="form-select form-select-sm custom-select" id="sexo">
              <option value="m" <?php echo (@$r["ctt_sex"] == "m") ? "selected" : ""; ?>>M</option>
                <option value="f" <?php echo (@$r["ctt_sex"] == "f") ? "selected" : ""; ?>>F</option>
                <option value="o" <?php echo (@$r["ctt_sex"] == "o") ? "selected" : ""; ?>>O</option>
                </select>
            </div>

            <div class="form-group w-100">
                <label for="datanasc">Data de Nascimento</label>
                <input type="date" class="form-control" name="_date_born" id="datanasc" placeholder="Data de nascimento">
            </div>

        </div>

        <button type="submit" name="bt_enviar" class="btn btn-success">Criar novo contato</button>

        <a href="/contacts" class="btn btn-danger">Cancelar</a>

    
    </form>
</div>
