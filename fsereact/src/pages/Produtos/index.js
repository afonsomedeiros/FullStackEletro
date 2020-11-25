import Categorias from '../../Components/Categorias/Categorias';
import Produtos from '../../Components/Produtos/Produtos';
import { Row } from 'react-bootstrap';

export default function PageProdutos() {

    return (
        <Row>
            <Categorias />
            <div className="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <Produtos />
            </div>
        </Row>
    );
}