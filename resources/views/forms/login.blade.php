@include('layouts.link')

<div class="d-flex justify-content-center align-items-center mt-5 pt-5">

        <div class="row">
            <div class="d-flex col border-end border-5 justify-content-center align-items-center">
                <img src="images\gambar1.png" alt="" style="height:13rem;width:13rem" >
            </div>
            
                <div class="col">
                    <form class="p-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                placeholder="Enter email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>

                        <div>Tidak punya akun? <a href="/register">Register disini!</a></div>
                    </form>
                </div>
                




    </div>
