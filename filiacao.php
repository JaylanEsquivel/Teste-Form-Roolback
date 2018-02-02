<?php

   $id = $_GET['id'];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>teste</title>
        <link rel="stylesheet" href="st.css" />
    </head>
    <body>
<?php if($id == 1){  ?>       
        <div class="topo">
            <div class="bg bg-1" >
                <span class="bg ativo">1</span>
                <span class="bg">2</span>
                <span class="bg">3</span>
                <span class="bg">4</span>
            </div>
        </div>
        <div class="form-ativo">
            <h3>Dados Usuario</h3>
            <form method="post">
                <input type="hidden" name="id" value="1"/>
                <label>Nome:</label>
                <input type="text" name="nome" />
                <label>Sobrenome:</label>
                <input type="text" name="sobre" />
                <input type="submit" value="Proximo" name="BTN1" style="background-color: #0066cc; color: #fff" />
            </form>
        </div>
<?php }  ?>
<?php if($id == 2){  ?>
        <div class="topo">
            <div class="bg bg-1" >
                <span class="bg">1</span>
                <span class="bg ativo">2</span>
                <span class="bg">3</span>
                <span class="bg">4</span>
            </div>
        </div>
        <div class="form-ativo">
             <h3>Dados Contatos</h3>
            <form method="post">
                <input type="hidden" name="id" value="2"/>
                <label>Telefone:</label>
                <input type="tel" name="tel" />
                <label>Email:</label>
                <input type="email" name="email" />
                <input type="submit" value="Proximo" name="BTN2" style="background-color: #0066cc; color: #fff" />
            </form>
        </div>
<?php }  ?>
<?php if($id == 3){  ?>
        <div class="topo">
            <div class="bg bg-1" >
                <span class="bg">1</span>
                <span class="bg">2</span>
                <span class="bg ativo">3</span>
                <span class="bg">4</span>
            </div>
        </div>
        <div class="form-ativo">
             <h3>Dados Profissao</h3>
            <form method="post>
                <input type="hidden" name="id" value="3"/>
                <label>Profissao:</label>
                <input type="text" name="pro" />
                <label>Cargo:</label>
                <input type="text" name="car" />
                <input type="submit" value="Proximo" name="BTN3" style="background-color: #0066cc ; color: #fff" />
            </form>
        </div>
<?php }  ?>
<?php if($id == 4){  ?>
        <div class="topo">
            <div class="bg bg-1" >
                <span class="bg">1</span>
                <span class="bg">2</span>
                <span class="bg">3</span>
                <span class="bg ativo">4</span>
            </div>
        </div>
        <div class="form-ativo">
             <h3>Dados Endereco</h3>
            <form method="post" action="integra.php">
                <input type="hidden" name="id" value="4"/>
                <label>Cidade:</label>
                <input type="text" name="cid" />
                <label>Estado:</label>
                <input type="text" name="estado" />
                <input type="submit" value="Concluir" name="BTN4" style="background-color: #0066cc; color: #fff" />
            </form>
        </div>
<?php }  ?>
    </body>
</html>
