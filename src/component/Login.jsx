import React, { useEffect, useState } from "react";

function Login() {

   const [login_state , change_login] =  useState({
      email_id : "",
      password: "",
    })
   const [login_save_d , change_login_save_d] =  useState({})

   const [sign_state , change_sign] =  useState({
      username : "",
      email_id : "",
      password: "",
    })
   const [sign_save, sign_save_change] =  useState({})

  const submit_sign_up=(e)=>{
    e.preventDefault();
    // alert("❌");
    sign_save_change(sign_state)
    change_sign((p)=>{
    return{
      username : "",
      email_id : "",
      password: ""
    }
  });
  console.log(sign_save);
  }

  const signup_change=(e)=>{
    // alert("ho gya ");
  let {value , name } = e.target ;   
  change_sign((p)=>{
    return{
    ...p ,
    [name] : value ,
    }
  })
   
  // console.log(sign_state)
  }



const set_login=(e)=>{
  // const {value , name} = e.target;
  // const value = e.target.value;
  // const name = e.target.name;
  
  let {value , name } = e.target ;   


  change_login((p)=>{
    return{
    ...p ,
    [name] : value ,
    }
  })
  // console.log(value);
}


const login_save=(e)=>{
  e.preventDefault()
  change_login_save_d(login_state)
  change_login((p)=>{
    return{
      email_id : "",
      password: ""
    }
  });
  console.log(login_save_d)
  // console.log( e.target.value);/
}



    useEffect(function () {
        const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container");
    
        sign_up_btn.addEventListener("click", () => {
          container.classList.add("sign-up-mode");
        });
    
        sign_in_btn.addEventListener(
          "click",
          () => {
            container.classList.remove("sign-up-mode");
          },
          []
        );
      });




  return (
    <>
    {/* <h1>{sign_save.username}  {sign_save.email_id}  {sign_save.password} </h1> */}
    <div className="main_form">
        <div className="container">
          <div className="forms-container">
            <div className="signin-signup">
              <form action="#" className="sign-in-form login_form" onSubmit={login_save}>
                <h2 className="title">Sign in</h2>
                <div className="input-field">
                  <i className="fas fa-user"></i>
                  <input type="text" placeholder="Email"  name="email_id" value={login_state.email_id} onChange={set_login}/>    {/*  login from  */ }
                </div>
                <div className="input-field">
                  <i className="fas fa-lock"></i>
                  <input type="password" placeholder="Password" name="password" value={login_state.password} onChange={set_login}/>
                </div>
                {/* <input type="submit" value="Login" className="btn solid" /> */}
                <button type='submit' className="btn login_btn" >Login</button>
                <p className="social-text">Or Sign in with social platforms</p>
                <div className="social-media">
                  <a href="#" className="social-icon">
                    <i className="fab fa-facebook-f"></i>
                  </a>
                  <a href="#" className="social-icon">
                    <i className="fab fa-twitter"></i>
                  </a>
                  <a href="#" className="social-icon">
                    <i className="fab fa-google"></i>
                  </a>
                  <a href="#" className="social-icon">
                    <i className="fab fa-linkedin-in"></i>
                  </a>
                </div>
              </form>
              <form action="#" className="sign-up-form login_form " onSubmit={submit_sign_up}>       {/*    sign-up from  */ }
                <h2 className="title">Sign up</h2>
                <div className="input-field">
                  <i className="fas fa-user"></i>
                  <input type="text" placeholder="Username" name="username" value={sign_state.username} onChange={signup_change}/>
                </div>
                <div className="input-field">
                  <i className="fas fa-envelope"></i>
                  <input type="email" placeholder="Email" name="email_id" value={sign_state.email_id} onChange={signup_change}/>
                </div>
                <div className="input-field">
                  <i className="fas fa-lock"></i>
                  <input type="password" placeholder="Password" name="password"  value={sign_state.password} onChange={signup_change}/>
                </div>
                {/* <input type="submit" className="btn" value="Sign up" /> */}
                <button type="submit" className="btn login_btn">Sign up</button>
                <p className="social-text">Or Sign up with social platforms</p>
                <div className="social-media">
                  <a href="#" className="social-icon">
                    <i className="fab fa-facebook-f"></i>
                  </a>
                  <a href="#" className="social-icon">
                    <i className="fab fa-twitter"></i>
                  </a>
                  <a href="#" className="social-icon">
                    <i className="fab fa-google"></i>
                  </a>
                  <a href="#" className="social-icon">
                    <i className="fab fa-linkedin-in"></i>
                  </a>
                </div>
              </form>
            </div>
          </div>

          <div className="panels-container">
            <div className="panel left-panel">
              <div className="content">
                <h3>New to our community ?</h3>
                <p>
                  Discover a world of possibilities! Join us and explore a
                  vibrant community where ideas flourish and connections thrive.
                </p>
                <button className="btn transparent" id="sign-up-btn">
                  Sign up
                </button>
              </div>
              <img  src="https://i.ibb.co/6HXL6q1/Privacy-policy-rafiki.png" className="image" alt="" />
              {/* <img src="public/download (1).svg" className="image" alt="" /> */}
            </div>
            <div className="panel right-panel">
              <div className="content">
                <h3>One of Our Valued Members</h3>
                <p>
                  Thank you for being part of our community. Your presence
                  enriches our shared experiences. Let's continue this journey
                  together!
                </p>
                <button className="btn transparent" id="sign-in-btn">
                  Sign in
                </button>
              </div>
              <img src="https://i.ibb.co/nP8H853/Mobile-login-rafiki.png"  className="image" alt="" />
              {/* <img src="public/download (2).svg" className="image" alt="" /> */}
            </div>
          </div>
        </div>
      </div>
    </>
  )
}

export default Login
