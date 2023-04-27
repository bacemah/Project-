import img from "../../../assets/SJE_white.webp"
import classes from "./Navbar.module.css"
function Navbar(){
    return(
        <div className={classes.navbar}>
            <img src={img} alt="" width="35px" height="35px"/> 
            <hr />
        </div>
    )
}
export default Navbar