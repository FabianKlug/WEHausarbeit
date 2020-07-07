import React from 'react';
import logo from './logo.svg';
import './App.css';

function App() {
  return (
    <div className="App">

      <header className="App-header">
          <form>
              <img src={logo} className="App-logo" alt="logo" height={100}/>
              <h1>Login</h1>

              <label>Nutzername </label>
              <br/>
              <input type="text"/>
              <br/>
              <label>Passwort</label>
              <br/>
              <input type="password"/>
              <br/>
              <button onClick={login}>
                  Login
              </button>




              <br/>

          </form>
      </header>
    </div>
  );

  function login() {
      console.log("moin")
  }
}

export default App;
