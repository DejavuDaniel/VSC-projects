import React from "react";

const Navigation = ({onRouteChange, route }) => {
    return (
        <nav style={{display: 'flex', justifyContent: 'flex-end'}}>
            {route === 'home'
                ? <p onClick={() => onRouteChange('signin')} className="f3 link dim white underline pa3 pointer">Sign Out</p>
                :<p></p>
            }
        </nav>
    );
}

export default Navigation;