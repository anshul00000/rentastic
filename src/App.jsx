import { useState } from 'react'
// import reactLogo from './assets/react.svg'
// import viteLogo from '/vite.svg'
import './App.css'
import 'bootstrap/dist/css/bootstrap.min.css';
import { Route, Routes } from "react-router-dom";
import Appbar from './component/Appbar'
import Home from './component/Home';
import Login from './component/Login';
import About from './component/About';



function Error(){
  return(<>
  <h1>404 this is not here</h1>
  </>)
};


function App() {
  const [count, setCount] = useState(0)

  return (
    <>
  <Appbar/>
  <Routes>
        <Route path="/" element={<Home />} />
        {/* <Route path="/contact" element={<Contact />} /> */}
        <Route path="/about" element={<About />} />
        <Route path="/login" element={<Login/>} />
        {/* <Route path="/signup" element={<Signup />} /> */}
        <Route path="/*" element={<Error />} />
      </Routes>
    </>
  )
}

export default App
