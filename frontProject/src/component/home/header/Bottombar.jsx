import img from "../../../assets/SJE_white.webp"
import classes from "./Navbar.module.css"
function Navbar(){
    return(
        <div className={classes.navbar}>
            <hr />
            <img src={img} alt="" width="35px" height="35px"/> 
        </div>
    )
}
export default Navbar