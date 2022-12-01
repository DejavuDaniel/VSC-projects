import React from "react";

const Sigin = ({onRouteChange}) => {
    return (
        <article className="br3 ba  b--black-10 mv4 w-100 w-50-m w-25-l mw6 shadow-5 center" style={{marginTop: '300px'}}>
            <main className="pa4 black-80">
                <div className="measure center">
                    <fieldset id="sign_up" className="ba b--transparent ph0 mh0">
                        <legend className="f1 fw6 ph0 mh0">Sign In</legend>
                        <div className="mt3">
                            <label className="db fw6 lh-copy f6" >Email</label>
                            <input className="pa2 input-reset ba bg-transparent hover-bg-black hover-white w-100" type="email" name="email-address" id="email-address" />
                        </div>
                        <div className="mv3">
                            <label className=" db fw6 lh-copy f6 " >Password</label>
                            <input className="pa2 input-reset ba bg-transparent hover-bg-black hover-white w-100" type="password" name="password" id="password" />
                        </div>
                    </fieldset>
                    <div className="">
                        <input 
                        onClick={() => onRouteChange('home')}
                        className="b ph3 pv2 input-reset ba b-black bg-transparent grow pointer f6 dib" 
                        type="submit" 
                        value="Sign in" 
                        />
                    </div>
                    <div className="lh-copy mt3">
                        <a onClick={() => onRouteChange('register')} href="#0" className="f6 link dim black db">Register</a>
                        <a href="#0" className="f6 link dim black db">Forgot your password?</a>
                    </div>
                </div>
            </main>
        </article>
    );
}

export default Sigin;