<?php namespace OpenEMR\FHIR\R4\FHIRResource\FHIRMolecularSequence;

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
 * Raw data describing a biological sequence.
 */
class FHIRMolecularSequenceStructureVariant extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Information about chromosome structure variation DNA change type.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public $variantType = null;

    /**
     * Used to indicate if the outer and inner start-end values have the same meaning.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRBoolean
     */
    public $exact = null;

    /**
     * Length of the variant chromosome.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRInteger
     */
    public $length = null;

    /**
     * Structural variant outer.
     * @var \OpenEMR\FHIR\R4\FHIRResource\FHIRMolecularSequence\FHIRMolecularSequenceOuter
     */
    public $outer = null;

    /**
     * Structural variant inner.
     * @var \OpenEMR\FHIR\R4\FHIRResource\FHIRMolecularSequence\FHIRMolecularSequenceInner
     */
    public $inner = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'MolecularSequence.StructureVariant';

    /**
     * Information about chromosome structure variation DNA change type.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getVariantType()
    {
        return $this->variantType;
    }

    /**
     * Information about chromosome structure variation DNA change type.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept $variantType
     * @return $this
     */
    public function setVariantType($variantType)
    {
        $this->variantType = $variantType;
        return $this;
    }

    /**
     * Used to indicate if the outer and inner start-end values have the same meaning.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRBoolean
     */
    public function getExact()
    {
        return $this->exact;
    }

    /**
     * Used to indicate if the outer and inner start-end values have the same meaning.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRBoolean $exact
     * @return $this
     */
    public function setExact($exact)
    {
        $this->exact = $exact;
        return $this;
    }

    /**
     * Length of the variant chromosome.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRInteger
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Length of the variant chromosome.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRInteger $length
     * @return $this
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Structural variant outer.
     * @return \OpenEMR\FHIR\R4\FHIRResource\FHIRMolecularSequence\FHIRMolecularSequenceOuter
     */
    public function getOuter()
    {
        return $this->outer;
    }

    /**
     * Structural variant outer.
     * @param \OpenEMR\FHIR\R4\FHIRResource\FHIRMolecularSequence\FHIRMolecularSequenceOuter $outer
     * @return $this
     */
    public function setOuter($outer)
    {
        $this->outer = $outer;
        return $this;
    }

    /**
     * Structural variant inner.
     * @return \OpenEMR\FHIR\R4\FHIRResource\FHIRMolecularSequence\FHIRMolecularSequenceInner
     */
    public function getInner()
    {
        return $this->inner;
    }

    /**
     * Structural variant inner.
     * @param \OpenEMR\FHIR\R4\FHIRResource\FHIRMolecularSequence\FHIRMolecularSequenceInner $inner
     * @return $this
     */
    public function setInner($inner)
    {
        $this->inner = $inner;
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
            if (isset($data['variantType'])) {
                $this->setVariantType($data['variantType']);
            }
            if (isset($data['exact'])) {
                $this->setExact($data['exact']);
            }
            if (isset($data['length'])) {
                $this->setLength($data['length']);
            }
            if (isset($data['outer'])) {
                $this->setOuter($data['outer']);
            }
            if (isset($data['inner'])) {
                $this->setInner($data['inner']);
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
        if (isset($this->variantType)) {
            $json['variantType'] = $this->variantType;
        }
        if (isset($this->exact)) {
            $json['exact'] = $this->exact;
        }
        if (isset($this->length)) {
            $json['length'] = $this->length;
        }
        if (isset($this->outer)) {
            $json['outer'] = $this->outer;
        }
        if (isset($this->inner)) {
            $json['inner'] = $this->inner;
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
            $sxe = new \SimpleXMLElement('<MolecularSequenceStructureVariant xmlns="http://hl7.org/fhir"></MolecularSequenceStructureVariant>');
        }
        parent::xmlSerialize(true, $sxe);
        if (isset($this->variantType)) {
            $this->variantType->xmlSerialize(true, $sxe->addChild('variantType'));
        }
        if (isset($this->exact)) {
            $this->exact->xmlSerialize(true, $sxe->addChild('exact'));
        }
        if (isset($this->length)) {
            $this->length->xmlSerialize(true, $sxe->addChild('length'));
        }
        if (isset($this->outer)) {
            $this->outer->xmlSerialize(true, $sxe->addChild('outer'));
        }
        if (isset($this->inner)) {
            $this->inner->xmlSerialize(true, $sxe->addChild('inner'));
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}
