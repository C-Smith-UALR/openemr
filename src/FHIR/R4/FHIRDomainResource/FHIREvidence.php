<?php namespace OpenEMR\FHIR\R4\FHIRDomainResource;

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

use OpenEMR\FHIR\R4\FHIRResource\FHIRDomainResource;

/**
 * The Evidence resource describes the conditional state (population and any exposures being compared within the population) and outcome (if specified) that the knowledge (evidence, assertion, recommendation) is about.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIREvidence extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * An absolute URI that is used to identify this evidence when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this evidence is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the evidence is stored on different servers.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * A formal identifier that is used to identify this evidence when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * The identifier that is used to identify this version of the evidence when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the evidence author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active artifacts.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A natural language name identifying the evidence. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * A short, descriptive, user-friendly title for the evidence.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * The short title provides an alternate title for use in informal descriptive contexts where the full, formal title is not necessary.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRString
     */
    public $shortTitle = null;

    /**
     * An explanatory or alternate title for the Evidence giving additional information about its content.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRString
     */
    public $subtitle = null;

    /**
     * The status of this evidence. Enables tracking the life-cycle of the content.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * The date  (and optionally time) when the evidence was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the evidence changes.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * The name of the organization or individual that published the evidence.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRContactDetail[]
     */
    public $contact = [];

    /**
     * A free text natural language description of the evidence from a consumer's perspective.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * A human-readable string to clarify or explain concepts about the resource.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRAnnotation[]
     */
    public $note = [];

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate evidence instances.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRUsageContext[]
     */
    public $useContext = [];

    /**
     * A legal or geographic region in which the evidence is intended to be used.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public $jurisdiction = [];

    /**
     * A copyright statement relating to the evidence and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the evidence.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRMarkdown
     */
    public $copyright = null;

    /**
     * The date on which the resource content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRDate
     */
    public $approvalDate = null;

    /**
     * The date on which the resource content was last reviewed. Review happens periodically after approval but does not change the original approval date.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRDate
     */
    public $lastReviewDate = null;

    /**
     * The period during which the evidence content was or is planned to be in active use.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRPeriod
     */
    public $effectivePeriod = null;

    /**
     * Descriptive topics related to the content of the Evidence. Topics provide a high-level categorization grouping types of Evidences that can be useful for filtering and searching.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public $topic = [];

    /**
     * An individiual or organization primarily involved in the creation and maintenance of the content.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRContactDetail[]
     */
    public $author = [];

    /**
     * An individual or organization primarily responsible for internal coherence of the content.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRContactDetail[]
     */
    public $editor = [];

    /**
     * An individual or organization primarily responsible for review of some aspect of the content.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRContactDetail[]
     */
    public $reviewer = [];

    /**
     * An individual or organization responsible for officially endorsing the content for use in some setting.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRContactDetail[]
     */
    public $endorser = [];

    /**
     * Related artifacts such as additional documentation, justification, or bibliographic references.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRRelatedArtifact[]
     */
    public $relatedArtifact = [];

    /**
     * A reference to a EvidenceVariable resource that defines the population for the research.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public $exposureBackground = null;

    /**
     * A reference to a EvidenceVariable resource that defines the exposure for the research.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRReference[]
     */
    public $exposureVariant = [];

    /**
     * A reference to a EvidenceVariable resomece that defines the outcome for the research.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRReference[]
     */
    public $outcome = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Evidence';

    /**
     * An absolute URI that is used to identify this evidence when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this evidence is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the evidence is stored on different servers.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * An absolute URI that is used to identify this evidence when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this evidence is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the evidence is stored on different servers.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * A formal identifier that is used to identify this evidence when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A formal identifier that is used to identify this evidence when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the evidence when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the evidence author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active artifacts.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The identifier that is used to identify this version of the evidence when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the evidence author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active artifacts.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * A natural language name identifying the evidence. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A natural language name identifying the evidence. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * A short, descriptive, user-friendly title for the evidence.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A short, descriptive, user-friendly title for the evidence.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * The short title provides an alternate title for use in informal descriptive contexts where the full, formal title is not necessary.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRString
     */
    public function getShortTitle()
    {
        return $this->shortTitle;
    }

    /**
     * The short title provides an alternate title for use in informal descriptive contexts where the full, formal title is not necessary.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRString $shortTitle
     * @return $this
     */
    public function setShortTitle($shortTitle)
    {
        $this->shortTitle = $shortTitle;
        return $this;
    }

    /**
     * An explanatory or alternate title for the Evidence giving additional information about its content.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRString
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * An explanatory or alternate title for the Evidence giving additional information about its content.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRString $subtitle
     * @return $this
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * The status of this evidence. Enables tracking the life-cycle of the content.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this evidence. Enables tracking the life-cycle of the content.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRPublicationStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The date  (and optionally time) when the evidence was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the evidence changes.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date  (and optionally time) when the evidence was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the evidence changes.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * The name of the organization or individual that published the evidence.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * The name of the organization or individual that published the evidence.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRString $publisher
     * @return $this
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRContactDetail[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRContactDetail $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * A free text natural language description of the evidence from a consumer's perspective.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A free text natural language description of the evidence from a consumer's perspective.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRMarkdown $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * A human-readable string to clarify or explain concepts about the resource.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * A human-readable string to clarify or explain concepts about the resource.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate evidence instances.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRUsageContext[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate evidence instances.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRUsageContext $useContext
     * @return $this
     */
    public function addUseContext($useContext)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * A legal or geographic region in which the evidence is intended to be used.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * A legal or geographic region in which the evidence is intended to be used.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return $this
     */
    public function addJurisdiction($jurisdiction)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * A copyright statement relating to the evidence and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the evidence.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRMarkdown
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * A copyright statement relating to the evidence and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the evidence.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRMarkdown $copyright
     * @return $this
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * The date on which the resource content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRDate
     */
    public function getApprovalDate()
    {
        return $this->approvalDate;
    }

    /**
     * The date on which the resource content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRDate $approvalDate
     * @return $this
     */
    public function setApprovalDate($approvalDate)
    {
        $this->approvalDate = $approvalDate;
        return $this;
    }

    /**
     * The date on which the resource content was last reviewed. Review happens periodically after approval but does not change the original approval date.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRDate
     */
    public function getLastReviewDate()
    {
        return $this->lastReviewDate;
    }

    /**
     * The date on which the resource content was last reviewed. Review happens periodically after approval but does not change the original approval date.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRDate $lastReviewDate
     * @return $this
     */
    public function setLastReviewDate($lastReviewDate)
    {
        $this->lastReviewDate = $lastReviewDate;
        return $this;
    }

    /**
     * The period during which the evidence content was or is planned to be in active use.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * The period during which the evidence content was or is planned to be in active use.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRPeriod $effectivePeriod
     * @return $this
     */
    public function setEffectivePeriod($effectivePeriod)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Descriptive topics related to the content of the Evidence. Topics provide a high-level categorization grouping types of Evidences that can be useful for filtering and searching.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Descriptive topics related to the content of the Evidence. Topics provide a high-level categorization grouping types of Evidences that can be useful for filtering and searching.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept $topic
     * @return $this
     */
    public function addTopic($topic)
    {
        $this->topic[] = $topic;
        return $this;
    }

    /**
     * An individiual or organization primarily involved in the creation and maintenance of the content.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRContactDetail[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * An individiual or organization primarily involved in the creation and maintenance of the content.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRContactDetail $author
     * @return $this
     */
    public function addAuthor($author)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * An individual or organization primarily responsible for internal coherence of the content.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRContactDetail[]
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * An individual or organization primarily responsible for internal coherence of the content.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRContactDetail $editor
     * @return $this
     */
    public function addEditor($editor)
    {
        $this->editor[] = $editor;
        return $this;
    }

    /**
     * An individual or organization primarily responsible for review of some aspect of the content.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRContactDetail[]
     */
    public function getReviewer()
    {
        return $this->reviewer;
    }

    /**
     * An individual or organization primarily responsible for review of some aspect of the content.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRContactDetail $reviewer
     * @return $this
     */
    public function addReviewer($reviewer)
    {
        $this->reviewer[] = $reviewer;
        return $this;
    }

    /**
     * An individual or organization responsible for officially endorsing the content for use in some setting.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRContactDetail[]
     */
    public function getEndorser()
    {
        return $this->endorser;
    }

    /**
     * An individual or organization responsible for officially endorsing the content for use in some setting.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRContactDetail $endorser
     * @return $this
     */
    public function addEndorser($endorser)
    {
        $this->endorser[] = $endorser;
        return $this;
    }

    /**
     * Related artifacts such as additional documentation, justification, or bibliographic references.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRRelatedArtifact[]
     */
    public function getRelatedArtifact()
    {
        return $this->relatedArtifact;
    }

    /**
     * Related artifacts such as additional documentation, justification, or bibliographic references.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRRelatedArtifact $relatedArtifact
     * @return $this
     */
    public function addRelatedArtifact($relatedArtifact)
    {
        $this->relatedArtifact[] = $relatedArtifact;
        return $this;
    }

    /**
     * A reference to a EvidenceVariable resource that defines the population for the research.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getExposureBackground()
    {
        return $this->exposureBackground;
    }

    /**
     * A reference to a EvidenceVariable resource that defines the population for the research.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRReference $exposureBackground
     * @return $this
     */
    public function setExposureBackground($exposureBackground)
    {
        $this->exposureBackground = $exposureBackground;
        return $this;
    }

    /**
     * A reference to a EvidenceVariable resource that defines the exposure for the research.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRReference[]
     */
    public function getExposureVariant()
    {
        return $this->exposureVariant;
    }

    /**
     * A reference to a EvidenceVariable resource that defines the exposure for the research.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRReference $exposureVariant
     * @return $this
     */
    public function addExposureVariant($exposureVariant)
    {
        $this->exposureVariant[] = $exposureVariant;
        return $this;
    }

    /**
     * A reference to a EvidenceVariable resomece that defines the outcome for the research.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRReference[]
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * A reference to a EvidenceVariable resomece that defines the outcome for the research.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRReference $outcome
     * @return $this
     */
    public function addOutcome($outcome)
    {
        $this->outcome[] = $outcome;
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
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach ($data['identifier'] as $d) {
                        $this->addIdentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.');
                }
            }
            if (isset($data['version'])) {
                $this->setVersion($data['version']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['title'])) {
                $this->setTitle($data['title']);
            }
            if (isset($data['shortTitle'])) {
                $this->setShortTitle($data['shortTitle']);
            }
            if (isset($data['subtitle'])) {
                $this->setSubtitle($data['subtitle']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['publisher'])) {
                $this->setPublisher($data['publisher']);
            }
            if (isset($data['contact'])) {
                if (is_array($data['contact'])) {
                    foreach ($data['contact'] as $d) {
                        $this->addContact($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"contact" must be array of objects or null, '.gettype($data['contact']).' seen.');
                }
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['note'])) {
                if (is_array($data['note'])) {
                    foreach ($data['note'] as $d) {
                        $this->addNote($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"note" must be array of objects or null, '.gettype($data['note']).' seen.');
                }
            }
            if (isset($data['useContext'])) {
                if (is_array($data['useContext'])) {
                    foreach ($data['useContext'] as $d) {
                        $this->addUseContext($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"useContext" must be array of objects or null, '.gettype($data['useContext']).' seen.');
                }
            }
            if (isset($data['jurisdiction'])) {
                if (is_array($data['jurisdiction'])) {
                    foreach ($data['jurisdiction'] as $d) {
                        $this->addJurisdiction($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"jurisdiction" must be array of objects or null, '.gettype($data['jurisdiction']).' seen.');
                }
            }
            if (isset($data['copyright'])) {
                $this->setCopyright($data['copyright']);
            }
            if (isset($data['approvalDate'])) {
                $this->setApprovalDate($data['approvalDate']);
            }
            if (isset($data['lastReviewDate'])) {
                $this->setLastReviewDate($data['lastReviewDate']);
            }
            if (isset($data['effectivePeriod'])) {
                $this->setEffectivePeriod($data['effectivePeriod']);
            }
            if (isset($data['topic'])) {
                if (is_array($data['topic'])) {
                    foreach ($data['topic'] as $d) {
                        $this->addTopic($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"topic" must be array of objects or null, '.gettype($data['topic']).' seen.');
                }
            }
            if (isset($data['author'])) {
                if (is_array($data['author'])) {
                    foreach ($data['author'] as $d) {
                        $this->addAuthor($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"author" must be array of objects or null, '.gettype($data['author']).' seen.');
                }
            }
            if (isset($data['editor'])) {
                if (is_array($data['editor'])) {
                    foreach ($data['editor'] as $d) {
                        $this->addEditor($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"editor" must be array of objects or null, '.gettype($data['editor']).' seen.');
                }
            }
            if (isset($data['reviewer'])) {
                if (is_array($data['reviewer'])) {
                    foreach ($data['reviewer'] as $d) {
                        $this->addReviewer($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"reviewer" must be array of objects or null, '.gettype($data['reviewer']).' seen.');
                }
            }
            if (isset($data['endorser'])) {
                if (is_array($data['endorser'])) {
                    foreach ($data['endorser'] as $d) {
                        $this->addEndorser($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"endorser" must be array of objects or null, '.gettype($data['endorser']).' seen.');
                }
            }
            if (isset($data['relatedArtifact'])) {
                if (is_array($data['relatedArtifact'])) {
                    foreach ($data['relatedArtifact'] as $d) {
                        $this->addRelatedArtifact($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"relatedArtifact" must be array of objects or null, '.gettype($data['relatedArtifact']).' seen.');
                }
            }
            if (isset($data['exposureBackground'])) {
                $this->setExposureBackground($data['exposureBackground']);
            }
            if (isset($data['exposureVariant'])) {
                if (is_array($data['exposureVariant'])) {
                    foreach ($data['exposureVariant'] as $d) {
                        $this->addExposureVariant($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"exposureVariant" must be array of objects or null, '.gettype($data['exposureVariant']).' seen.');
                }
            }
            if (isset($data['outcome'])) {
                if (is_array($data['outcome'])) {
                    foreach ($data['outcome'] as $d) {
                        $this->addOutcome($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"outcome" must be array of objects or null, '.gettype($data['outcome']).' seen.');
                }
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
        $json['resourceType'] = $this->_fhirElementName;
        if (isset($this->url)) {
            $json['url'] = $this->url;
        }
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach ($this->identifier as $identifier) {
                $json['identifier'][] = $identifier;
            }
        }
        if (isset($this->version)) {
            $json['version'] = $this->version;
        }
        if (isset($this->name)) {
            $json['name'] = $this->name;
        }
        if (isset($this->title)) {
            $json['title'] = $this->title;
        }
        if (isset($this->shortTitle)) {
            $json['shortTitle'] = $this->shortTitle;
        }
        if (isset($this->subtitle)) {
            $json['subtitle'] = $this->subtitle;
        }
        if (isset($this->status)) {
            $json['status'] = $this->status;
        }
        if (isset($this->date)) {
            $json['date'] = $this->date;
        }
        if (isset($this->publisher)) {
            $json['publisher'] = $this->publisher;
        }
        if (0 < count($this->contact)) {
            $json['contact'] = [];
            foreach ($this->contact as $contact) {
                $json['contact'][] = $contact;
            }
        }
        if (isset($this->description)) {
            $json['description'] = $this->description;
        }
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach ($this->note as $note) {
                $json['note'][] = $note;
            }
        }
        if (0 < count($this->useContext)) {
            $json['useContext'] = [];
            foreach ($this->useContext as $useContext) {
                $json['useContext'][] = $useContext;
            }
        }
        if (0 < count($this->jurisdiction)) {
            $json['jurisdiction'] = [];
            foreach ($this->jurisdiction as $jurisdiction) {
                $json['jurisdiction'][] = $jurisdiction;
            }
        }
        if (isset($this->copyright)) {
            $json['copyright'] = $this->copyright;
        }
        if (isset($this->approvalDate)) {
            $json['approvalDate'] = $this->approvalDate;
        }
        if (isset($this->lastReviewDate)) {
            $json['lastReviewDate'] = $this->lastReviewDate;
        }
        if (isset($this->effectivePeriod)) {
            $json['effectivePeriod'] = $this->effectivePeriod;
        }
        if (0 < count($this->topic)) {
            $json['topic'] = [];
            foreach ($this->topic as $topic) {
                $json['topic'][] = $topic;
            }
        }
        if (0 < count($this->author)) {
            $json['author'] = [];
            foreach ($this->author as $author) {
                $json['author'][] = $author;
            }
        }
        if (0 < count($this->editor)) {
            $json['editor'] = [];
            foreach ($this->editor as $editor) {
                $json['editor'][] = $editor;
            }
        }
        if (0 < count($this->reviewer)) {
            $json['reviewer'] = [];
            foreach ($this->reviewer as $reviewer) {
                $json['reviewer'][] = $reviewer;
            }
        }
        if (0 < count($this->endorser)) {
            $json['endorser'] = [];
            foreach ($this->endorser as $endorser) {
                $json['endorser'][] = $endorser;
            }
        }
        if (0 < count($this->relatedArtifact)) {
            $json['relatedArtifact'] = [];
            foreach ($this->relatedArtifact as $relatedArtifact) {
                $json['relatedArtifact'][] = $relatedArtifact;
            }
        }
        if (isset($this->exposureBackground)) {
            $json['exposureBackground'] = $this->exposureBackground;
        }
        if (0 < count($this->exposureVariant)) {
            $json['exposureVariant'] = [];
            foreach ($this->exposureVariant as $exposureVariant) {
                $json['exposureVariant'][] = $exposureVariant;
            }
        }
        if (0 < count($this->outcome)) {
            $json['outcome'] = [];
            foreach ($this->outcome as $outcome) {
                $json['outcome'][] = $outcome;
            }
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
            $sxe = new \SimpleXMLElement('<Evidence xmlns="http://hl7.org/fhir"></Evidence>');
        }
        parent::xmlSerialize(true, $sxe);
        if (isset($this->url)) {
            $this->url->xmlSerialize(true, $sxe->addChild('url'));
        }
        if (0 < count($this->identifier)) {
            foreach ($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->version)) {
            $this->version->xmlSerialize(true, $sxe->addChild('version'));
        }
        if (isset($this->name)) {
            $this->name->xmlSerialize(true, $sxe->addChild('name'));
        }
        if (isset($this->title)) {
            $this->title->xmlSerialize(true, $sxe->addChild('title'));
        }
        if (isset($this->shortTitle)) {
            $this->shortTitle->xmlSerialize(true, $sxe->addChild('shortTitle'));
        }
        if (isset($this->subtitle)) {
            $this->subtitle->xmlSerialize(true, $sxe->addChild('subtitle'));
        }
        if (isset($this->status)) {
            $this->status->xmlSerialize(true, $sxe->addChild('status'));
        }
        if (isset($this->date)) {
            $this->date->xmlSerialize(true, $sxe->addChild('date'));
        }
        if (isset($this->publisher)) {
            $this->publisher->xmlSerialize(true, $sxe->addChild('publisher'));
        }
        if (0 < count($this->contact)) {
            foreach ($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (isset($this->description)) {
            $this->description->xmlSerialize(true, $sxe->addChild('description'));
        }
        if (0 < count($this->note)) {
            foreach ($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (0 < count($this->useContext)) {
            foreach ($this->useContext as $useContext) {
                $useContext->xmlSerialize(true, $sxe->addChild('useContext'));
            }
        }
        if (0 < count($this->jurisdiction)) {
            foreach ($this->jurisdiction as $jurisdiction) {
                $jurisdiction->xmlSerialize(true, $sxe->addChild('jurisdiction'));
            }
        }
        if (isset($this->copyright)) {
            $this->copyright->xmlSerialize(true, $sxe->addChild('copyright'));
        }
        if (isset($this->approvalDate)) {
            $this->approvalDate->xmlSerialize(true, $sxe->addChild('approvalDate'));
        }
        if (isset($this->lastReviewDate)) {
            $this->lastReviewDate->xmlSerialize(true, $sxe->addChild('lastReviewDate'));
        }
        if (isset($this->effectivePeriod)) {
            $this->effectivePeriod->xmlSerialize(true, $sxe->addChild('effectivePeriod'));
        }
        if (0 < count($this->topic)) {
            foreach ($this->topic as $topic) {
                $topic->xmlSerialize(true, $sxe->addChild('topic'));
            }
        }
        if (0 < count($this->author)) {
            foreach ($this->author as $author) {
                $author->xmlSerialize(true, $sxe->addChild('author'));
            }
        }
        if (0 < count($this->editor)) {
            foreach ($this->editor as $editor) {
                $editor->xmlSerialize(true, $sxe->addChild('editor'));
            }
        }
        if (0 < count($this->reviewer)) {
            foreach ($this->reviewer as $reviewer) {
                $reviewer->xmlSerialize(true, $sxe->addChild('reviewer'));
            }
        }
        if (0 < count($this->endorser)) {
            foreach ($this->endorser as $endorser) {
                $endorser->xmlSerialize(true, $sxe->addChild('endorser'));
            }
        }
        if (0 < count($this->relatedArtifact)) {
            foreach ($this->relatedArtifact as $relatedArtifact) {
                $relatedArtifact->xmlSerialize(true, $sxe->addChild('relatedArtifact'));
            }
        }
        if (isset($this->exposureBackground)) {
            $this->exposureBackground->xmlSerialize(true, $sxe->addChild('exposureBackground'));
        }
        if (0 < count($this->exposureVariant)) {
            foreach ($this->exposureVariant as $exposureVariant) {
                $exposureVariant->xmlSerialize(true, $sxe->addChild('exposureVariant'));
            }
        }
        if (0 < count($this->outcome)) {
            foreach ($this->outcome as $outcome) {
                $outcome->xmlSerialize(true, $sxe->addChild('outcome'));
            }
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}
