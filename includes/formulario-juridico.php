<div class="container" >
      <a class="links" id="paracadastro"></a>
       
       <div class="content">      
        <div id="cadastro">
          <form method="post" action=""> 
            <h1>Cadastro Jurídico</h1> 
             
            <p> 
              <label for="nome">Nome empresa</label>
              <input id="nome_cad" name="nomeempresa" required="required" type="text" placeholder="nome da sua empresa" />
            </p>

            <p> 
              <label for="nome">Nome responsável</label>
              <input id="nome_cad" name="responsavel" required="required" type="text" placeholder=" seu nome" />
            </p>

            <p> 
              <label for="cnpj">Cnpj</label>
              <input id="cnpj_cad" name="cnpj" required="required" type="text" placeholder="85.317.162/0001-00" />
            </p>

            <p> 
              <label for="cep">Cep</label>
              <input id="cep_cad" name="cep" required="required" type="cep" placeholder="00082-100"/>
            </p>

            <p> 
              <label for="email">Email</label>
              <input id="email_cad" name="email" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
            </p>
             
            <p> 
              <label for="telefone">Telefone</label>
              <input id="telefone_cad" name="telefone" required="required" type="tel" placeholder="XXXXX-XXXX"/>
            </p>

            <label class="checkbox">
              <input type="checkbox" name="pessoajuridica" value="s" checked>
              Pessoa Juridica
            </label>
             
            <p> 
              <input type="submit" value="Cadastrar" name="Cadastrar"/> 
            </p>
        </div>
      </div>
    </div>