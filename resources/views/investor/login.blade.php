<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Invest Match</title>
    <link rel="stylesheet" href="/css/investor.css">
</head>

<body>
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="brand">
                        <img src="{{asset('image/logo-white-nobg.png')}}" alt="INVEST MATCH">
                    </div>
                    <h2>Login</h2>
                    <p>Don't have an account? <a href="/auth/signup">Register</a></p>
                    <div class="login-tab">
                        <div class="nav">
                            <ul>
                                <li><button>Email</button></li>
                                <li><button>Phone Number</button></li>
                            </ul>
                        </div>
                        <div class="form email-form">
                            <h2>Sign in with Email</h2>
                            <form>
                                <div class="input">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" required />
                                </div>
                                <div class="input">
                                    <label for="password">Password:</label>
                                    <input type="password" id="password" required />
                                </div>
                                <div class="btn">
                                    <input type="submit" value="Continue" />
                                </div>
                            </form>
                        </div>
                        <div class="form phone-form">
                            <h2>Sign in with Phone</h2>
                            <form>
                                <div class="input">
                                    <label for="phone">Phone:</label>
                                    <input type="text" id="phone" required />
                                </div>
                                <div class="input">
                                    <label for="password">Password:</label>
                                    <input type="password" id="password" required />
                                </div>
                                <div class="btn">
                                    <input type="submit" value="Continue" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="content">
                        <h3>Hello, Friend!</h3>
                        <p>Register with your personal details to use all of site features</p>
                        <img src="{{asset('image/login.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>