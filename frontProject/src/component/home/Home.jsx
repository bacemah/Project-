import { useState } from 'react'
import Classes from './Home.module.css'
import Navbar from './header/Navbar'
import SectionE from './section/SectionE'
import SectionD from './section/SectionD'
import SectionA from './section/SectionA'
import Bottombar from './header/Bottombar'
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
                    <SectionE>Type de site!</SectionE>
                }
            <Bottombar/>
        </section>
    )
}
export default Home 