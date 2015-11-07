<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Class NF_Field_Button
 */
class NF_Fields_Button extends NF_Abstracts_Field
{
    const TEMPLATE = 'button';

    protected $_name = 'button';

    protected $_nicename = 'Button';

    protected $_section = '';

    protected $_type = 'button';

    public function __construct()
    {
        parent::__construct();

        unset( $this->_settings[ 'label' ] );
        unset( $this->_settings[ 'label_pos' ] );
        unset( $this->_settings[ 'placeholder' ] );
        unset( $this->_settings[ 'required' ] );

        $this->_nicename = __( 'Button', Ninja_Forms::TEXTDOMAIN );
    }
}
