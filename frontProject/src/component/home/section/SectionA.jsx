import { useState } from "react"
import Element from "./Element"
import Button from "./Button"
import Classes from "./Section.module.css"

const svg1 =[
<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" className="bi bi-browser-chrome" viewBox="0 0 16 16">
    <path fillRule="evenodd" d="M16 8a8.001 8.001 0 0 1-7.022 7.94l1.902-7.098a2.995 2.995 0 0 0 .05-1.492A2.977 2.977 0 0 0 10.237 6h5.511A8 8 0 0 1 16 8ZM0 8a8 8 0 0 0 7.927 8l1.426-5.321a2.978 2.978 0 0 1-.723.255 2.979 2.979 0 0 1-1.743-.147 2.986 2.986 0 0 1-1.043-.7L.633 4.876A7.975 7.975 0 0 0 0 8Zm5.004-.167L1.108 3.936A8.003 8.003 0 0 1 15.418 5H8.066a2.979 2.979 0 0 0-1.252.243 2.987 2.987 0 0 0-1.81 2.59ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
    </svg> , 
<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" className="bi bi-phone-fill" viewBox="0 0 16 16">
  <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
</svg> 
]


function SectionA(props){
    const [change , setChange] = useState(true)
    const [type , setType] = useState(null)
    function inputChange(e){
        if(e.target.value == "Site"){
            setChange(false)
            setType(e.target.value)
        }else if (e.target.value=="Application"){
            setType(e.target.value)
            setChange(false)
        }
    }
    const [counter , setCounter] = useState(0)
    function nextHandler(){
        if(type=="Application"){
            setCounter(1)
            console.log(counter)
        }else if(type=="Site"){
            setCounter(2)
            console.log(counter)
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
        <div className={Classes.section +  " d-flex flex-column align-items-center  mx-5 mb-5 pt-3"}>
            <h2>{props.children}</h2>
            <div className="d-flex flex-column align-items-center">
                <div className="d-flex">
                    <span className={Classes.left}  hidden={hidden}><Element name="type" id="Site" type="radio" svg ={svg1[0]} onChange={inputChange}/></span>
                    <span className={Classes.right}  hidden={hidden}><Element name="type" id="Application" type="radio" svg={svg1[1]} onChange={inputChange} /></span> 
                </div>
                <div className="d-flex flex-column ">
                    <Button onClick={nextHandler} disabled={change} className={Classes.right + " btn btn-success my-3"}hidden={hiddenButton}> Next </Button>
                    <Button onCLick="" disabled="faux" className={Classes.left+ " btn btn-danger my-3"}hidden={hiddenButton}> Predious </Button>
                </div>
            </div>
            {(counter==1) && <h1>hello</h1>}
            {(counter==2)&& <h1>yes</h1>}
        </div>
    )
}
export default SectionA