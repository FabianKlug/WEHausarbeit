import React,{ useState } from "react";
import "./styles.css";
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";
import { Home } from "./components/Home";

export const App = () => {
  const [user,setUser] = useState([]);
  const [pw, setPw] = useState();
  
  const submit = (event) => {
    event.preventDefault();
    console.log(user, pw)
       
  };
  return (
    
    <Router>
      <div>
        <h1> Registrierung </h1>
        <form>
          <ul>
            <li><label> Nutzername </label>
            </li>
            <li><input required onChange={(event)=> {
              console.log(user, pw)
              setUser(event.target.value)
            }}/>
            </li>
            <li><label> Passwort </label>
            </li>
            <li><input required type="password"
              onChange={(event)=>{
                console.log(user, pw)
                setPw(event.target.value)
              }}/>
            </li>
            <li>
              <button type="submit" onClick={submit}> Registrieren </button>
            </li>

          </ul>
          
        </form>
        <Switch>
          <Route path="/about">
            <About />
          </Route>
          <Route path="/users">
            <Users />
          </Route>
          <Route path="/">
            <Home />
          </Route>
        </Switch>
      </div>
    </Router>
  );
}


function About() {
  return <h2>About</h2>;
}

function Users() {
  return <h2>Users</h2>;
}
        /*<Switch>
          <Route path="/">
            <Home />
          </Route>
        </Switch>
      </div>
    </Router>*/
    
  );

  
};
