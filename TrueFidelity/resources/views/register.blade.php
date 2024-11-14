<div>
<header>
        <div class="header">
            <div><a href="http://127.0.0.1:8000/"><button>TF</button></a></div>
            <div><a href="http://127.0.0.1:8000/get_started"><button>get started</button></a></div>
            <div><a href="http://127.0.0.1:8000/tf_standard"><button>TF Standard</button></a></div>
            <div><a href="http://127.0.0.1:8000/devices"><button>Devices</button></a></div>
            <div><a href="http://127.0.0.1:8000/about_us"><button>About Us</button></a></div>
        </div>
    </header>
    <body>
        <form class="form" method="POST">
        @csrf 
            <input class="input_field" type="text" name="user_name" value="user name">
            <input class="input_field" type="text" name="e-mail_address" value="e-mail address">
            <input class="input_field" type="text" name="e-mail_address_rep" value="repeat e-mail address">
            <input class="input_field" type="text" name="first_name" value="first name">
            <input class="input_field" type="text" name="sur_name" value="sur name">
            <input class="input_field" type="text" name="company" value="company">
            <input class="button" type="submit" value="register">
        </form>
    </body>
</div>

