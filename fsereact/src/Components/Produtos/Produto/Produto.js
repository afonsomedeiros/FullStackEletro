import './Produto.css';

export default function Produto(props) {

    function show_info(event) {
        const target = event.currentTarget;
        const element = target.getElementsByTagName("figcaption")[0];
        element.style.visibility = "initial";
    }

    function hide_info(event) {
        const target = event.currentTarget;
        const element = target.getElementsByTagName("figcaption")[0];
        element.style.visibility = "hidden";
    }

    return (
        <figure className={props.categoria + " produto col-lg-3 col-md-4 col-sm-6 col-xs-12 mr-auto"} onMouseOver={show_info} onMouseOut={hide_info}>
            <img src={require(`./img/${props.imagem}`).default} alt="Imagem de Produtos" />
            <figcaption>
                <p className="nome-prod">
                    {props.nome}
                </p>
                <p className="precofinal-prod">
                    R$ {props.preco}
                </p>
            </figcaption>
        </figure>
    )
}