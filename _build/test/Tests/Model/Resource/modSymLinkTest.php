<?php
/*
 * This file is part of the MODX Revolution package.
 *
 * Copyright (c) MODX, LLC
 *
 * For complete copyright and license information, see the COPYRIGHT and LICENSE
 * files found in the top-level directory of this distribution.
 *
 * @package modx-test
*/

namespace MODX\Revolution\Tests\Model\Resource;


use MODX\Revolution\modSymLink;
use MODX\Revolution\MODxTestCase;

/**
 * Tests related to the modSymLink class.
 *
 * @package modx-test
 * @subpackage modx
 * @group Model
 * @group Resource
 * @group modResource
 */
class modSymLinkTest extends MODxTestCase
{

    /**
     * @var modSymlink $symlink
     */
    protected $symlink;

    /**
     * Setup fixtures before each test.
     *
     * @before
     */
    public function setUpFixtures()
    {
        parent::setUpFixtures();

        /** @var modSymlink $symlink */
        $symlink = $this->modx->newObject(modSymlink::class);
        $this->symlink = $symlink;
    }

    /**
     * Tear down fixtures after each test.
     *
     * @after
     */
    public function tearDownFixtures()
    {
        parent::tearDownFixtures();
    }

    public function testConstruct()
    {
        $this->assertEquals('reference', $this->symlink->get('type'));
        $this->assertEquals('web', $this->symlink->_contextKey);
    }
}
