import { useState } from "react"
import Element from "./Element"
import Button from "./Button"
import Classes from "./Section.module.css"
const svg1=[
    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-app-indicator" viewBox="0 0 16 16">
  <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"/>
  <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
</svg>,
    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
    <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
  </svg>,
    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-pc" viewBox="0 0 16 16">
    <path d="M5 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H5Zm.5 14a.5.5 0 1 1 0 1 .5.5 0 0 1 0-1Zm2 0a.5.5 0 1 1 0 1 .5.5 0 0 1 0-1ZM5 1.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5ZM5.5 3h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1Z"/>
  </svg>
]


function SectionD(props){
    const [change , setChange] = useState(true)
    const [type , setType] = useState(null)
    function inputChange(e){
        if(e.target.value=='Responsive'){
            setChange(false)
            setType(e.target.value)
        }else if(e.target.value=='Mobile'){
            setChange(false)
            setType(e.target.value)
        }else if(e.target.value=='Desktop'){
            setChange(false)
            setType(e.target.value)
        }
    }
    const [counter , setCounter] = useState(0)
    function nextHandler(){
        if(type=="Responsive"){
            setCounter(1)
            console.log(counter)
        }else if(type=="Mobile"){
            setCounter(2)
            console.log(counter)
        }else if(type=="Desktop"){
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
 
      },20)
    return(
        <div className={Classes.section +  " d-flex flex-column align-items-center  mx-5 pt-3"}>
            <h2>{props.children}</h2>
            <div className="d-flex flex-column align-items-center">
                <div className="d-flex">
                    <span className={Classes.left}  hidden={hidden}><Element salaire="200" name="type" id="Responsive" type="radio" svg ={svg1[0]} onChange={inputChange}/></span>
                    <span className={Classes.up}  hidden={hidden}><Element salaire="100" name="type" id="Mobile" type="radio" svg={svg1[1]} onChange={inputChange} /></span> 
                    <span className={Classes.right}  hidden={hidden}><Element salaire="300" name="type" id="Desktop" type="radio" svg={svg1[2]} onChange={inputChange} /></span>
                </div>
                <div className="d-flex flex-column ">
                    <Button onClick={nextHandler} disabled={change} className={Classes.right1 + " btn btn-success my-3"}hidden={hiddenButton}> Next </Button>
                    <Button onCLick={previousHandler} className={Classes.left1+ " btn btn-danger my-3"}hidden={hiddenButton}> Predious </Button>
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
export default SectionD