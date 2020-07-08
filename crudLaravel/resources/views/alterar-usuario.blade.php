<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD</title>

        <!-- Favicon -->
        <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

        <!-- Fonts -->        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />       

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('js/ajax.js')}}"></script>
    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">       
            <div class="navbar-header">
            <a class="navbar-brand" href="{{url('/')}}" 
                   title="Página Inicial">
                    Início </a>
            </div>
        </nav> 


            <div id="line-one" style="margin-top: 5%;">   
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="center">
                    <br> 
                        <h1><b><center>Usuários</center></b></h1>
                        <br>
                    </div>
                </div>
                
                <div class="row">  
                    <br>
                    <h4 id="center"><b>ALTERAÇÃO DOS DADOS DO USUÁRIO</b></h4>
                    <br> 
                    <form method="post" 
                          action="{{route('usuario.update', $usuario->id)}}" 
                          enctype="multipart/form-data">
                        {!! method_field('put') !!}
                        {{ csrf_field() }}
                        <div class="col-md-6">              
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" name="nome" 
                                       class="form-control" 
                                       value="{{$usuario->nome}}"
                                       required>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" name="CPF" 
                                       class="form-control" 
                                       value="{{$usuario->CPF}}"
                                       required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" name="senha" 
                                       class="form-control" 
                                       value="{{$usuario->senha}}"
                                       required>
                            </div>    
                        </div>                 
                                         
                        <div class="col-md-12">                   
                            <button type="reset" class="btn btn-default">
                                Limpar
                            </button>
                            <button type="submit" 
                                    class="btn btn-warning" id="black">
                                Alterar
                            </button>
                        </div>
                    </form>             
                </div>
            </div>
        </div>
    </body>
</html>
