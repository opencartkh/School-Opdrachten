import React from 'react';
import Agenda from './components/agenda';

/**
 * App component
 * @param props
 * @returns {XML}
 */
class App extends React.Component {

    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="app">
                <h1>Agenda</h1>
                <h4>Maarten Kampmeijer en Job Groen MD2B</h4>
                <Agenda />
            </div>
        );
    }

}

export default App;
