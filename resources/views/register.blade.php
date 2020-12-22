<html>
    <head>
        <title>registeration</title>
        <style>
            body{background: rgb(228, 226, 226);}
            div{
                width: 300px;
                padding: 10px;
                background: #fff;
                margin: 100px auto;
                text-align: center;
            }
            input,button,select{
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
            <h4>Staff register</h4>

            <form action="registering" method="POST">
                @csrf
                <input type="text" placeholder="username" name="user" required><br>
                <span style="color: red;">@error ('user') {{$message}} @enderror</span>
                <input type="password" placeholder="password" name="pass" required><br>
                <span style="color: red;">@error ('pass') {{$message}} @enderror</span>

                <input type="text" placeholder="email" name="email" required><br>
                <span style="color: red;">@error ('email') {{$message}} @enderror</span>
                <input type="date" placeholder="birth of date" name="BOD" required><br>
                <span style="color: red;">@error ('BOD') {{$message}} @enderror</span>

                <input type="text" placeholder="address" name="address" required><br>
                <span style="color: red;">@error ('address') {{$message}} @enderror</span>
                <input type="number" placeholder="phone" name="phone" required><br>
                <span style="color: red;">@error ('phone') {{$message}} @enderror</span>

                <select name="gender" class="input" name="gender" required>
                <option >Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                 </select><br>
                

                <select name="status" class="input" name="status" required>
                
                <option value="singe">single</option>
                <option value="married">married</option>
                 </select><br>

                <select name="depart" class="input" name="depart">
                @foreach($data as $dep)
                <option value='{{$dep->name}}'>{{$dep->name}}</option>
                @endforeach
                </select>
                
                

                <button>register</button>
            </form>
            <a href="/">log in ?</a>
            <!--@if($errors->any())
            @foreach($errors->all() as $err)
            <li> {{$err}}</li>
            @endforeach
            @endif-->
        
        </div>
    </body>
</html>