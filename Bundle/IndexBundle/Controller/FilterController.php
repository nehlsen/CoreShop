<?php

namespace CoreShop\Bundle\IndexBundle\Controller;

use CoreShop\Bundle\ResourceBundle\Controller\ResourceController;
use CoreShop\Component\Index\Filter\FilterConditionProcessorInterface;
use CoreShop\Component\Index\Model\IndexInterface;
use Symfony\Component\HttpFoundation\Request;

class FilterController extends ResourceController
{
    /**
     * Get Index Configurations.
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getConfigAction()
    {
        return $this->viewHandler->handle(
            [
                'success' => true,
                'conditions' => array_keys($this->getConditionTypes()),
            ]
        );
    }

    public function getFieldsForIndexAction(Request $request)
    {
        $index = $this->get('coreshop.repository.index')->find($request->get('index'));

        if ($index instanceof IndexInterface) {
            $columns = [
            ];

            foreach ($index->getColumns() as $col) {
                $columns[] = [
                    'name' => $col->getName(),
                ];
            }

            return $this->viewHandler->handle($columns);
        }

        return $this->viewHandler->handle(false);
    }

    public function getValuesForFilterFieldAction(Request $request)
    {
        $index = $this->get('coreshop.repository.index')->find($request->get('index'));

        if ($index instanceof IndexInterface) {
            $list = $this->get('coreshop.factory.index.list')->createList($index);

            $values = $list->getGroupByValues($request->get('field'));
            $returnValues = [];

            foreach ($values as $value) {
                if ($value) {
                    $returnValues[] = [
                        'value' => $value,
                        'key' => $value,
                    ];
                } else {
                    $returnValues[] = [
                        'value' => FilterConditionProcessorInterface::EMPTY_STRING,
                        'key' => 'empty',
                    ];
                }
            }

            return $this->viewHandler->handle($returnValues);
        }

        return $this->viewHandler->handle(false);
    }

    /**
     * @return array
     */
    protected function getConditionTypes()
    {
        return $this->getParameter('coreshop.filter.condition_types');
    }
}
