<?php

/**
 *
 * bareos-webui - Bareos Web-Frontend
 *
 * @link      https://github.com/bareos/bareos for the canonical source repository
 * @copyright Copyright (C) 2013-2022 Bareos GmbH & Co. KG (http://www.bareos.org/)
 * @license   GNU Affero General Public License (http://www.gnu.org/licenses/)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

return array(

  'controllers' => array(
    'invokables' => array(
      'Analytics\Controller\Analytics' => 'Analytics\Controller\AnalyticsController',
    ),
  ),
  'controller_plugins' => array(
    'invokables' => array(
      'SessionTimeoutPlugin' => 'Application\Controller\Plugin\SessionTimeoutPlugin',
    ),
  ),
  'router' => array(
    'routes' => array(
      'analytics' => array(
        'type' => 'segment',
        'options' => array(
          'route' => '/analytics[/][:action][/][:id]',
          'constraints' => array(
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[a-zA-Z0-9][a-zA-Z0-9\._-]*',
          ),
          'defaults' => array(
            'controller' => 'Analytics\Controller\Analytics',
            'action' => 'index',
          ),
        ),
      ),
    ),
  ),
  'view_manager' => array(
    'template_path_stack' => array(
      'analytics' => __DIR__ . '/../view',
    ),
  ),

);
