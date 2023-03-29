
  <div class="container" >
      <a class="links" id="paracadastro"></a>
       
       <div class="content">      
        <div id="cadastro">
          <form method="post" action=""> 
            <h1>Cadastro</h1> 
             
            <p> 
              <label for="nome">Seu nome</label>
              <input id="nome_cad" name="nome" required="required" type="text" placeholder="nome" />
            </p>
             
            <p> 
              <label for="email">Seu e-mail</label>
              <input id="email_cad" name="email" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
            </p>
             
            <p> 
              <label for="telefone">Telefone</label>
              <input id="telefone_cad" name="telefone" required="required" type="tel" placeholder="XXXXX-XXXX"/>
            </p>

            <p> 
              <label for="cep">Cep</label>
              <input id="cep_cad" name="cep" required="required" type="cep" placeholder="00082-100"/>
            </p>

            <label class="checkbox">
              <input type="checkbox" name="pessoafisica" value="s" checked>
              Pessoa Fisica
            </label>
             
            <p> 
              <input type="submit" value="Cadastrar" name="Cadastrar"/> 
            </p>
        </div>
      </div>
    </div>