<?php
/**
 * iCalcreator, a PHP rfc2445/rfc5545 solution.
 *
 * This file is a part of iCalcreator.
 *
 * Copyright (c) 2007-2017 Kjell-Inge Gustafsson, kigkonsult, All rights reserved
 * Link      http://kigkonsult.se/iCalcreator/index.php
 * Package   iCalcreator
 * Version   2.24
 * License   Subject matter of licence is the software iCalcreator.
 *           The above copyright, link, package and version notices,
 *           this licence notice and the [rfc5545] PRODID as implemented and
 *           invoked in iCalcreator shall be included in all copies or
 *           substantial portions of the iCalcreator.
 *           iCalcreator can be used either under the terms of
 *           a proprietary license, available at <https://kigkonsult.se/>
 *           or the GNU Affero General Public License, version 3:
 *           iCalcreator is free software: you can redistribute it and/or
 *           modify it under the terms of the GNU Affero General Public License
 *           as published by the Free Software Foundation, either version 3 of
 *           the License, or (at your option) any later version.
 *           iCalcreator is distributed in the hope that it will be useful,
 *           but WITHOUT ANY WARRANTY; without even the implied warranty of
 *           MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *           GNU Affero General Public License for more details.
 *           You should have received a copy of the GNU Affero General Public
 *           License along with this program.
 *           If not, see <http://www.gnu.org/licenses/>.
 */
namespace kigkonsult\iCalcreator;
use kigkonsult\iCalcreator\util\util;
/**
 * iCalcreator VJOURNAL component class
 *
 * @author Kjell-Inge Gustafsson, kigkonsult <ical@kigkonsult.se>
 * @since 2.22.23 - 2017-02-01
 */
class vjournal extends calendarComponent {
  use traits\ATTACHtrait,
      traits\ATTENDEEtrait,
      traits\CATEGORIEStrait,
      traits\CLASStrait,
      traits\COMMENTtrait,
      traits\CONTACTtrait,
      traits\CREATEDtrait,
      traits\DESCRIPTIONtrait,
      traits\DTSTAMPtrait,
      traits\DTSTARTtrait,
      traits\EXDATEtrait,
      traits\EXRULEtrait,
      traits\LAST_MODIFIEDtrait,
      traits\ORGANIZERtrait,
      traits\RDATEtrait,
      traits\RECURRENCE_IDtrait,
      traits\RELATED_TOtrait,
      traits\REQUEST_STATUStrait,
      traits\RRULEtrait,
      traits\SEQUENCEtrait,
      traits\STATUStrait,
      traits\SUMMARYtrait,
      traits\UIDtrait,
      traits\URLtrait;
/**
 * Constructor for calendar component VJOURNAL object
 *
 * @author Kjell-Inge Gustafsson, kigkonsult <ical@kigkonsult.se>
 * @since 2.22.20 - 2017-02-01
 * @param array $config
 */
  public function __construct( $config = []) {
    static $J = 'j';
    parent::__construct();
    $this->setConfig( util::initConfig( $config ));
    $this->cno = $J . parent::getObjectNo();
  }
/**
 * Destructor
 *
 * @author Kjell-Inge Gustafsson, kigkonsult <ical@kigkonsult.se>
 * @since 2.22.23 - 2017-03-18
 */
  public function __destruct() {
    unset( $this->xprop,
           $this->components,
           $this->unparsed,
           $this->config,
           $this->compix,
           $this->propix,
           $this->propdelix );
    unset( $this->objName,
           $this->cno );
    unset( $this->attach,
           $this->attendee,
           $this->categories,
           $this->class,
           $this->comment,
           $this->contact,
           $this->created,
           $this->description,
           $this->dtstamp,
           $this->dtstart,
           $this->exdate,
           $this->exrule,
           $this->lastmodified,
           $this->organizer,
           $this->rdate,
           $this->recurrenceid,
           $this->relatedto,
           $this->requeststatus,
           $this->rrule,
           $this->sequence,
           $this->status,
           $this->summary,
           $this->uid,
           $this->url );
  }
/**
 * Return formatted output for calendar component VJOURNAL object instance
 *
 * @author Kjell-Inge Gustafsson, kigkonsult <ical@kigkonsult.se>
 * @since 2.5.1 - 2008-10-12
 * @return string
 */
  public function createComponent() {
    $objectname =  strtoupper( $this->objName );
    $component  = sprintf( util::$FMTBEGIN, $objectname );
    $component .= $this->createUid();
    $component .= $this->createDtstamp();
    $component .= $this->createAttach();
    $component .= $this->createAttendee();
    $component .= $this->createCategories();
    $component .= $this->createClass();
    $component .= $this->createComment();
    $component .= $this->createContact();
    $component .= $this->createCreated();
    $component .= $this->createDescription();
    $component .= $this->createDtstart();
    $component .= $this->createExdate();
    $component .= $this->createExrule();
    $component .= $this->createLastModified();
    $component .= $this->createOrganizer();
    $component .= $this->createRdate();
    $component .= $this->createRequestStatus();
    $component .= $this->createRecurrenceid();
    $component .= $this->createRelatedTo();
    $component .= $this->createRrule();
    $component .= $this->createSequence();
    $component .= $this->createStatus();
    $component .= $this->createSummary();
    $component .= $this->createUrl();
    $component .= $this->createXprop();
    return $component . sprintf( util::$FMTEND, $objectname );
  }
}
