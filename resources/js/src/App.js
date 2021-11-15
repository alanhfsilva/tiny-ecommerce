import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Routes, Route } from "react-router-dom";
import Header from '../components/Header';

function App() {
    return (
      <BrowserRouter>    
        <Routes>  
          <Route component = { Header }  path="/" exact />
          <Route component = { Header }  path="header" exact />
        </Routes>
      </BrowserRouter>
    );
}

export default App;

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}
