import { useState } from 'react'
import Classes from './Home.module.css'
import SectionA from './section/SectionA'
import Navbar from './header/Navbar'
function Home(){
    const [start , setstart] = useState(false)
    const [hidden , setHidden] = useState(false)
    function startOn(){
        setstart(true)
        setHidden(true)
    }

    return(
        <section>
            <Navbar />
            <div className={Classes.h1 +" mt-4 mx-5"}>
                <h1>Estimer le côut de votre projet <br /> facilement ... </h1>
                <button className="my-5 btn btn-primary" onClick={startOn} hidden={hidden} > Commencer </button>
            </div>
                { start && 
                    <SectionA> Website or Application ? </SectionA>
                }
        </section>
    )
}
export default Home