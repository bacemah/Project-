



function Button(props){
    return (
        <button className={props.className}  disabled={props.disabled} onClick={props.onClick} hidden={props.hidden}>{props.children}</button>
    )
}
export default Button