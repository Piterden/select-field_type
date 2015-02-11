<?php namespace Anomaly\SelectFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;

/**
 * Class SelectFieldTypePresenter
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\SelectFieldType
 */
class SelectFieldTypePresenter extends FieldTypePresenter
{

    /**
     * The decorated object.
     *
     * @var SelectFieldType
     */
    protected $object;

    /**
     * Return the value from the key value.
     *
     * @return string|null
     */
    public function value()
    {
        $options = $this->object->getOptions();

        if (!$this->object->getValue()) {
            return null;
        }

        return array_get($options, $this->object->getValue());
    }
}