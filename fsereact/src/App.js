import Menu from './Components/Menu/Menu'
import Footer from './Components/footer/footer'
import { BrowserRouter } from 'react-router-dom';
import { Container } from 'react-bootstrap'
import Routes from './routes';

import './App.css';

function App() {
  return (
    <BrowserRouter>
      <div className="App">
        <header><Menu /></header>
        <main>
          <Container fluid>
            <Routes />
          </Container>
        </main>
        <Footer />
      </div>
    </BrowserRouter>
  );
}

export default App;
