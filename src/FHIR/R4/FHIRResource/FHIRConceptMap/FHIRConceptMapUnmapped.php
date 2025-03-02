<?php namespace OpenEMR\FHIR\R4\FHIRResource\FHIRConceptMap;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 14th, 2019
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use OpenEMR\FHIR\R4\FHIRElement\FHIRBackboneElement;

/**
 * A statement of relationships from one set of concepts to one or more other concepts - either concepts in code systems, or data element/data element concepts, or classes in class models.
 */
class FHIRConceptMapUnmapped extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Defines which action to take if there is no match for the source concept in the target system designated for the group. One of 3 actions are possible: use the unmapped code (this is useful when doing a mapping between versions, and only a few codes have changed), use a fixed code (a default code), or alternatively, a reference to a different concept map can be provided (by canonical URL).
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRConceptMapGroupUnmappedMode
     */
    public $mode = null;

    /**
     * The fixed code to use when the mode = 'fixed'  - all unmapped codes are mapped to a single fixed code.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRCode
     */
    public $code = null;

    /**
     * The display for the code. The display is only provided to help editors when editing the concept map.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRString
     */
    public $display = null;

    /**
     * The canonical reference to an additional ConceptMap resource instance to use for mapping if this ConceptMap resource contains no matching mapping for the source concept.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRCanonical
     */
    public $url = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ConceptMap.Unmapped';

    /**
     * Defines which action to take if there is no match for the source concept in the target system designated for the group. One of 3 actions are possible: use the unmapped code (this is useful when doing a mapping between versions, and only a few codes have changed), use a fixed code (a default code), or alternatively, a reference to a different concept map can be provided (by canonical URL).
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRConceptMapGroupUnmappedMode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Defines which action to take if there is no match for the source concept in the target system designated for the group. One of 3 actions are possible: use the unmapped code (this is useful when doing a mapping between versions, and only a few codes have changed), use a fixed code (a default code), or alternatively, a reference to a different concept map can be provided (by canonical URL).
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRConceptMapGroupUnmappedMode $mode
     * @return $this
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * The fixed code to use when the mode = 'fixed'  - all unmapped codes are mapped to a single fixed code.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * The fixed code to use when the mode = 'fixed'  - all unmapped codes are mapped to a single fixed code.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRCode $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * The display for the code. The display is only provided to help editors when editing the concept map.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRString
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * The display for the code. The display is only provided to help editors when editing the concept map.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRString $display
     * @return $this
     */
    public function setDisplay($display)
    {
        $this->display = $display;
        return $this;
    }

    /**
     * The canonical reference to an additional ConceptMap resource instance to use for mapping if this ConceptMap resource contains no matching mapping for the source concept.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRCanonical
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * The canonical reference to an additional ConceptMap resource instance to use for mapping if this ConceptMap resource contains no matching mapping for the source concept.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRCanonical $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = [])
    {
        if (is_array($data)) {
            if (isset($data['mode'])) {
                $this->setMode($data['mode']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['display'])) {
                $this->setDisplay($data['display']);
            }
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (isset($this->mode)) {
            $json['mode'] = $this->mode;
        }
        if (isset($this->code)) {
            $json['code'] = $this->code;
        }
        if (isset($this->display)) {
            $json['display'] = $this->display;
        }
        if (isset($this->url)) {
            $json['url'] = $this->url;
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ConceptMapUnmapped xmlns="http://hl7.org/fhir"></ConceptMapUnmapped>');
        }
        parent::xmlSerialize(true, $sxe);
        if (isset($this->mode)) {
            $this->mode->xmlSerialize(true, $sxe->addChild('mode'));
        }
        if (isset($this->code)) {
            $this->code->xmlSerialize(true, $sxe->addChild('code'));
        }
        if (isset($this->display)) {
            $this->display->xmlSerialize(true, $sxe->addChild('display'));
        }
        if (isset($this->url)) {
            $this->url->xmlSerialize(true, $sxe->addChild('url'));
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}
