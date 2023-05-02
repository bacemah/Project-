import classes from './Elment.module.css'
function Element(props){
    return (
        <div className={classes.conteneur + " mt-4 mx-5"}>
            <label htmlFor={props.id}>
                <div className={classes.box }>
                    {props.svg}
                    <p>
                        {props.id} <br />
                        Price : {props.salaire}dt
                    </p>
                </div>
            </label>
            <input type={props.type} name={props.name} id={props.id} value={props.id} className="my-3" onChange={props.onChange}/>
        </div>
    )
}
export default Element 