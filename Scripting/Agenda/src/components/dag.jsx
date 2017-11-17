import React from 'react';

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
            </div>
        );
    }

}

export default Dag;
