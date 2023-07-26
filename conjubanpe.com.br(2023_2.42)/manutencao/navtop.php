<hr style = "width: 100%;height: 8px;margin-left: auto;margin-right: auto;background-color:blanchedalmond;border: 0 none;margin-top: 0px;margin-bottom:0px";></hr>

<nav class=" grey lighten-5" role="navigation">
      
    <div class="nav-wrapper container">
        
        

<ul id=slide-out class=sidenav>
    <li><div class=user-view>
      <div class=background>
   
      </div>
   
     


    </div></li>
    
    <?php  if(@$email==""){ echo "
    <li><a href=login.php><i class=material-icons>power_settings_new
    </i>Fazer Login</a></li>
    <li><a href=#>Cadastro <i class=material-icons>input</i></a></li> 
    <li><div class=divider></div></li>
    <li><a class=waves-effect href=index.php><i class=material-icons>info_outline</i>Início</a></li> ";
}else{
 echo"<li>";
echo $_SESSION['nome']." <br>";
echo"</li>";

    echo "<li><a name=btnProfile href=\"user.php\"><i class=\"fas fa-cog\"></i></a>Meu perfil</li>";

       echo "<li><a href=\"sair.php\"><i class = material-icons>power_settings_new</i>Sair</a> </li>";
      echo "</ul>";
    
    
    
    
    
;}
    
     
     ?>
     
  </ul>
  <a href=# data-target=slide-out class="sidenav-trigger show-on-large"><i class=material-icons style=color:#203F7A;>menu</i></a>
        
        
        
        
        
        
        <a id="logo-container" href="index.php" class="brand-logo"><img src="images/jubanpng2.png" style="width:90px; height:65px; padding-left:15px">  </a>
    
    
    <a href="#" class="brand-logo right"> <img src="images/cbn.png" style="width: min(50vw, 120px); height:min(50vw, 35px); padding-left:15px"></a>
    
     <div  class="nav-wrapper container" ><a id="logo-container" href="#" class="brand-logo center"> <h4 id="h4conjuban" style="font-family: Poppins; color:#e02a1b;">CONJUBAN - PE </h4></a>
     
     <ul id="nav-mobile" class="right hide-on-med-and-down">
         
         
     </ul>
    
  
    
    
    
      <ul class"nav-mobile" class="right hide-on-med-and-down">
       
            
            
            <!--
            <a class="black-text text-darken-1" href="#"><img src="images/cbn.png" style="width:90px; height:65px; padding-left:15px"></a></li>
            -->
            
               
  
            
      </ul>
      
     










     
      
    </div>
   
    <div class="nav-content">
      <ul class="tabs tabs-transparent ">
        
        <!--
        
        <li class="tab"><a class="active" href="index.php"> Início</a></li>
        <li class="tab"><a href="Bíblia.php"> Bíblia </a></li>
     
        <li class="tab"><a href="IBMBJEstudos.php"> Estudos da semana</a></li>
        <li class="tab"><a href="IBMBJLive.php"> Live(Em breve)</a></li>
        <li class="tab"><a href="IBMBJMissoes.php"> Missões</a></li>
        <li class="tab"><a href="IBMBJNoticias.php"> Notícias</a></li>
         -->


      </ul>
      
      
      
    </div>
 
   
   
  </nav>
  
    <ul class="sidenav" id="mobile-demo">
    <li><a href="administrativo.html">Meu Perfil</a></li>
    <li><a href="login.html">Entrar</a></li>
    <li><a href="cadastrar.html">Cadastrar</a></li>
  </ul>