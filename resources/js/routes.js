import React from "react";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import Header from './components/Header';

const Main = () => {
   return(
       <BrowserRouter>    
        <Routes>  
          <Route component = { Header }  path="/" exact />
          <Route component = { Header }  path="header" exact />
        </Routes>
       </BrowserRouter>
   )
}

export default Main;