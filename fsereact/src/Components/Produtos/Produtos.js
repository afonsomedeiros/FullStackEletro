import { useState, useEffect } from 'react';

import Produto from './Produto/Produto';
import { Container, Row } from 'react-bootstrap';

export default function Produtos() {
    const [produtos, setProdutos] = useState([]);

    useEffect(() => {
        async function fetchData() {
            const resposta = await fetch("http://localhost/Projetos/fullstackeletro/php/api/produtos.php")
            //const resposta = await fetch("http://fullstackeletro.freecluster.eu/produtos.php")
            const dados = await resposta.json()
            setProdutos(dados);
        }
        fetchData();
    }, []);

    return (
        <Container>
            <Row>
                {produtos && produtos.map(item => <Produto key={item.id} imagem={item.imagem} nome={item.nome} preco={item.preco} categoria={item.fogão} />)}
            </Row>
        </Container>
    )
}