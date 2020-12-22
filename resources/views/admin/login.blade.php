<html>
    <head>
        <title>Login</title>
        <style>
            body{background: rgb(228, 226, 226);}
            div{
                width: 300px;
                padding: 10px;
                background: #fff;
                margin: 100px auto;
                text-align: center;
            }
            input,button{
                width: 260;
                height: 34;
                margin: 10px auto;
                padding-left: 8px;
                border: 2px solid #ddd;
            }
            input:focus{
                border-color: rgb(207, 7, 7);
            }
            button{
                color: #fff;
                background: chocolate;
                border: none;
                font-weight: 600;
            }
            h1 span{color: rgb(207, 7, 7);}
            h4{color: #777;}
            a{text-decoration: none;}


        </style>
    </head>
    <body>
        <div>
            <h1>Tra<span>cking</span></h1>
            <h4>Staff Login</h4>

            <form action="login" method="POST">
                @csrf
                <input type="text" placeholder="username" name="user" required><br>
                <span style="color: red;">@error ('user') {{$message}} @enderror</span>
                <input type="password" placeholder="password" name="pass" required><br>
                <span style="color: red;">@error ('pass') {{$message}} @enderror</span>
                <button>Login</button>
            </form>
            <a href="register">not registered yet ?</a>
            @if($errors->any())
            @foreach($errors->all() as $err)
            <li> {{$err}}</li>
            @endforeach
            @endif
        
        </div>
    </body>
</html>