import React from 'react';
import Item from './item';

/**
 * Dag component
 * @param props
 * @returns {XML}
 */
class Dag extends React.Component {

    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="dag">
              <div className="dag__dag">
                {this.props.dag}
              </div>
              <div className="dag__datum">
                {this.props.datum}
              </div>
              <Item
                  titel="Test Item"
                  tijd="14:00-16:00"
                  extra="Dit is een test item"
                  />
            </div>
        );
    }

}

export default Dag;
