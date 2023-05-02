import { useState } from "react"
import Element from "./Element"
import Button from "./Button"
import Classes from "./Section.module.css"
const svg1=[
    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-app-indicator" viewBox="0 0 16 16">
  <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"/>
  <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
</svg>,
    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
    <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
  </svg>,
    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
    <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
    <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
  </svg>
]


function SectionE(props){
    const [change , setChange] = useState(true)
    const [type , setType] = useState(null)
    function inputChange(e){
        if(e.target.value=='Vitrine'){
            setChange(false)
            setType(e.target.value)
        }else if(e.target.value=='E-Commerce'){
            setChange(false)
            setType(e.target.value)
        }else if(e.target.value=='Dynamique'){
            setChange(false)
            setType(e.target.value)
        }
    }
    const [counter , setCounter] = useState(0)
    function nextHandler(){
        if(type=="Vitrine"){
            setCounter(1)
            console.log(counter)
        }else if(type=="E-Commerce"){
            setCounter(2)
            console.log(counter)
        }else if(type=="Dynamique"){
            setCounter(3)
            console.log(counter)
        }

    }
    const [counter2 , setCounter2] = useState(0)
    function previousHandler(){
        if(type=="Vitrine"){
            setCounter2(1)
            console.log(counter2)
        }else if(type=="E-Commerce"){
            setCounter2(2)
            console.log(counter2)
        }else if(type=="Dynamique"){
            setCounter2(3)
            console.log(counter2)
        }
    }
    const [hidden , setHidden] = useState(true)
    setTimeout(()=>{
        setHidden(false) 
     },10)
     const [hiddenButton , setHiddenButton] =useState(true)
     setTimeout(()=>{
       setHiddenButton(false) 
      },40)
    return(
        <div className={Classes.section +  " d-flex flex-column align-items-center  mx-5  pt-5"}>
            <h2>{props.children}</h2>
            <div className="d-flex flex-column align-items-center">
                <div className="d-flex">
                    <span className={Classes.left}  hidden={hidden}><Element salaire="200" name="type" id="Vitrine" type="radio" svg ={svg1[0]} onChange={inputChange}/></span>
                    <span className={Classes.up}  hidden={hidden}><Element salaire="100" name="type" id="E-Commerce" type="radio" svg={svg1[1]} onChange={inputChange} /></span> 
                    <span className={Classes.right}  hidden={hidden}><Element salaire="300" name="type" id="Dynamique" type="radio" svg={svg1[2]} onChange={inputChange} /></span>
                </div>
                <div className="d-flex flex-column ">
                    <Button onClick={nextHandler} disabled={change} className={Classes.right1 + " btn btn-success my-3"}hidden={hiddenButton}> Next </Button>
                    <Button onCLick={previousHandler}  className={Classes.left1+ " btn btn-danger my-3"}hidden={hiddenButton}> Predious </Button>
                </div>
            </div>
            {(counter==1) && <h1>normal</h1>}
            {(counter==2) && <h1>yes</h1>}
            {(counter==3) && <h1>no</h1>}
            {(counter2==1) && <h1>normal2</h1>}
            {(counter2==2) && <h1>yes2</h1>}
            {(counter2==3) && <h1>no2</h1>}
        </div>
    )
}
export default SectionE